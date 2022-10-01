<?php
	session_start();
	if(empty($_SESSION['user_history'])){
		$_SESSION['user_history'] = array();
		$_SESSION['total_length'] = 0;
	}

	$json_files_data = file_get_contents('../question.json');
	$json_data = json_decode($json_files_data, true);
	$_SESSION['total_length']=  count($json_data);
	

	// Question List Data
	if( isset($_REQUEST['action']) && $_REQUEST['action']=="showList"){
		ShowListQuestion($_POST['qust_id']);
	}

	// Question List
	function ShowListQuestion($quest_id){
		if(!empty($GLOBALS['json_data'])){
			$output="";
			$class="";
			$id=0;
			$sr=1;
			$get_user_data = $_SESSION['user_history'];
			$output.='<div class="btn-group mt-n5 mx-2" role="group" aria-label="List Category" id="myBtnContainer">
				<button type="button" class="btn btn_active btn-outline-secondary" id="all_btn" onclick="filterSelection(`all`,`list`)">All</button>
				<button type="button" class="btn btn_active btn-outline-secondary"  id="all_btn"><i class="fa-sharp fa-solid fa-ellipsis-vertical"></i></button>
				<button type="button" class="btn btn-outline-success" id="attempt_btn" onclick="filterSelection(`attempt`,`list`)" > <i class="fa-solid fa-eye"></i> Attempt</button>
				<button type="button" class="btn btn-outline-warning" id="wrong_btn" onclick="filterSelection(`wrong`,`list`)"> <i class="bi bi-eye-slash"></i> Unattempt</button>
			</div>';
			foreach($GLOBALS['json_data'] as $data){
				if($id==$quest_id){
					$class="active";
				}else{
					$class="";
				}
				$check_attempt_question = fetch_user_select_option($get_user_data,$data['content_id']);
				if(!empty($check_attempt_question)){
					$question_status="attempt";
					$badge_class="success";
					$badge_value="Attempt";
					$attempt = '<i class="fa-solid fa-eye"></i>';
				}else{
					$question_status="wrong";
					$badge_class="warning";
					$badge_value="Unattempt";
					$attempt = '<i class="bi bi-eye-slash"></i>';
				}
				$get_all_questioon = json_decode($data['content_text'],true);
				$output.='<div class="filter-question show d-flex ms-2 '.$question_status.'"><a class="'.$class.' list-group-item-action list-group-item-light text-truncate fs-6" href="javascript:switchQuestion('.$id.')"><span class="float-left t  mt-3">'.$sr.'</span> : '.$get_all_questioon['question'].'</br><span class="badge mx-5 bg-'.$badge_class.'">'.$attempt.' '.$badge_value.'</span></a></div>';
				$id++;
				$sr++;
			}
			echo $output;
		}
	}
	

	// Next Question
	if( isset($_REQUEST['action']) && $_REQUEST['action']=="next"){
		NextQuestion();
	}
	function NextQuestion(){
		$question_num= $_POST['qust_id']+1;
		$total_length= count($GLOBALS['json_data']);
		$data=array(
			"content_id"=>$_POST['content_id'],
			"selected_option"=>$_POST['select_option']
		);
		$get_user_data = $_SESSION['user_history'];
		store_user_history($data);
		if($question_num<$total_length){
			$question_content_id= $GLOBALS['json_data'][$question_num]['content_id'];
			$selected_options = fetch_user_select_option($get_user_data,$question_content_id);
			$question_data = json_decode($GLOBALS['json_data'][$question_num]['content_text'], true); 
			$get_data=getQuestion($question_content_id,$question_data,$question_num,0,$selected_options);
			echo $get_data;
		}
		if( (($question_num)==$total_length)){
			$question_content_id= $GLOBALS['json_data'][$_POST['qust_id']]['content_id'];
			$question_num= $_POST['qust_id'];
			$selected_options = fetch_user_select_option($get_user_data,$question_content_id);
			$question_data = json_decode($GLOBALS['json_data'][$question_num]['content_text'], true); 
			$get_data=getQuestion($question_content_id,$question_data,$question_num,"1",$selected_options);
			echo $get_data;
		}
	}

	// Fetch Previous Question
	if( isset($_REQUEST['action']) && $_REQUEST['action']=="prev"){
		previousQuestion();
	}
	function previousQuestion(){
		$question_num= $_POST['qust_id']-1;
		$total_length= count($GLOBALS['json_data']);
		$question_content_id= $GLOBALS['json_data'][$question_num]['content_id'];
		$get_user_data= $_SESSION['user_history'];
		// store_user_history($get_user_data);
		$selected_options = fetch_user_select_option($get_user_data,$question_content_id);
		if($question_num<$total_length){
			$question_data = json_decode($GLOBALS['json_data'][$question_num]['content_text'], true); 
			$get_data=getQuestion($question_content_id,$question_data,$question_num,0,$selected_options);
			echo $get_data;
		}
	}

	

	// Finished Test 
	if( isset($_REQUEST['action']) && $_REQUEST['action']=="finishedTest"){
		finishedTest();
	}
	function finishedTest(){
		$attempt_question= 0;
		$unattempt_question=0;
		$total_length_data =  count($GLOBALS['json_data']);
		$data=array();
		$data=array(
			"content_id"=>$_POST['content_id'],
			"selected_option"=>$_POST['select_option']
		);
		$send_json_data = array();
		store_user_history($data);
		if(!empty($_SESSION['user_history'])){
			$attempt_question= count($_SESSION['user_history']);
			$unattempt_question= $total_length_data - $attempt_question;

			$data= array(
				"attempt_question"=> $attempt_question,
				"unattempt_question"=> $unattempt_question,
			);
		}else{
			$unattempt_question= $total_length_data - $attempt_question;
			$data= array(
				"attempt_question"=> $attempt_question,
				"unattempt_question"=> $unattempt_question,
			);
		}
		$send_json_data= json_encode($data);
		echo $send_json_data;
	}
	
	// Prev or Next Question
	function getQuestion($content_id,$question_details,$counter,$end_test=0,$select_option=0){
		$option_counter = 0;
		$attempt_question = 0;
		$unattempt_question = 0;
		$option_list_array= array("A","B","C","D");
		if($end_test == 1){
			if(!empty($_SESSION['user_history'])){
				$attempt_question = count($_SESSION['user_history']);
				$unattempt_question= $_SESSION['total_length'] - $attempt_question;
			}
		}
		$output='<input type="hidden" id="ques_id" name="ques_id" value="'.$counter.'"><input type="hidden" id="end_test" name="end_test" value="'.$end_test.'">
		<input type="hidden" id="question_id" name="question_id" value="'.$content_id.'">
		<input type="hidden" id="attempt_quest" name="attempt_quest" value="'.$attempt_question.'">
		<input type="hidden" id="un_atempt_quest" name="un_atempt_quest" value="'.$unattempt_question.'">
		<h5 class="mt-4">'.$question_details['question'].'</h5>
		<table class="table mt-5 table-hover">
			<tbody>';
			foreach($question_details['answers'] as $question_data){
				$is_cehcked= $question_data['id']==$select_option?'checked':'';
				$output.='<tr>
							<th scope="row">
								<div class="float-start">'.$option_list_array[$option_counter].'</div>
								<div class="form-check mx-4" tabindex="0">
									<input class="form-check-input" type="radio" name="select_option" id="flexRadioDefault'.$option_counter.'" value="'.$question_data['id'].'" '.$is_cehcked.' tabindex="0">
									<label class="form-check-label" for="flexRadioDefault'.$option_counter.'">
									'.$question_data['answer'].'
									</label>
								</div>
							</th>
						</tr>';
						$option_counter++;
			}
			$output.='</tbody>
		</table>';
		return $output;
	}

	//Data Store
	function store_user_history($array_data){
		if(!empty($array_data['selected_option'])){
			if(empty($_SESSION["user_history"])) {
				$history_data[$array_data['content_id']]=array('content_id' => $array_data['content_id'],'select_option' => $array_data['selected_option']);
				array_push($_SESSION['user_history'], $history_data);
			}else{
				$get_user_data= $_SESSION['user_history'];
				$is_found=false;
				$element_position=0;
				$i=0;
				foreach ($get_user_data as $key) {
					foreach($key as $data_key){
						if( ($data_key['content_id']==$array_data['content_id']) ){
							$is_found=true;
							$element_position= $i;
							break;
						}
						$i++;
					}
				}

				if($is_found){
					unset($_SESSION['user_history'][$element_position][$array_data['content_id']]);
					$history_data[$array_data['content_id']]=array('content_id' => $array_data['content_id'],'select_option' => $array_data['selected_option']);
					$_SESSION['user_history'][$element_position] = $history_data;
				}else{
					$history_data[$array_data['content_id']]=array('content_id' => $array_data['content_id'],'select_option' => $array_data['selected_option']);
					array_push($_SESSION['user_history'], $history_data);
				}
			}
		}
	}

	// Select the Option
	function fetch_user_select_option($user_data,$question_content_id){
		$selected_options=0;
		foreach ($user_data as $key) {
			foreach($key as $data_key){
				if($data_key['content_id']==$question_content_id){
					$selected_options= $data_key['select_option'];
					break;
				}
			}
		}
		return $selected_options;
	}
