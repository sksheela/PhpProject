<?php
/* Smarty version 4.2.0, created on 2022-10-01 12:36:33
  from 'C:\xampp\htdocs\smarty_project\templates\test.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63381831bb8ca6_38445128',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9dd11526b1e4a811b967e2fdd5e1240c320dcda4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty_project\\templates\\test.tpl',
      1 => 1664620592,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../templates/header.tpl' => 1,
    'file:../templates/footer.tpl' => 1,
  ),
),false)) {
function content_63381831bb8ca6_38445128 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">
    <div class="col-sm-12">
        <div id="listData_div" class="sidepanel height500">
        </div>
        <div id="page-content-wrapper">
            <div class="container-fluid" id="question_div">
                <input type="hidden" name="question_id" id="question_id" value="<?php echo $_smarty_tpl->tpl_vars['content_id']->value;?>
">
                <input type="hidden" id="ques_id" name="ques_id" value="<?php echo $_smarty_tpl->tpl_vars['question_sr']->value;?>
">
                <h5 class="mt-4"><?php echo $_smarty_tpl->tpl_vars['test_data']->value['question'];?>
</h5>
                <table class="table table-hover mt-5" role="table">
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['test_data']->value['answers'], 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                            <?php if ($_smarty_tpl->tpl_vars['value']->value['id'] == $_smarty_tpl->tpl_vars['selected_options']->value) {?>
                                <?php $_smarty_tpl->_assignInScope('is_select_option', "checked");?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->_assignInScope('is_select_option', '');?>
                            <?php }?>
                            <tr>
                                <th scope="row">
                                    <div class="float-start"><?php echo $_smarty_tpl->tpl_vars['option_list_array']->value[$_smarty_tpl->tpl_vars['key']->value];?>
</div>
                                    <div class="form-check mx-4" tabindex="0">
                                        <input class="form-check-input" type="radio" name="select_option" id="flexRadioDefault<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" value=" <?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" tabindex="0" <?php echo $_smarty_tpl->tpl_vars['is_select_option']->value;?>
>
                                        <label class="form-check-label" for="flexRadioDefault<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
                                        <?php echo $_smarty_tpl->tpl_vars['value']->value['answer'];?>

                                        </label>
                                    </div>                                    
                                </th>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="row ">
        <div class="col-sm-6 offset-5 text-end fixed-bottom  mb-3 "> 
            <button class="btn btn-light" type="button">
                <span id="time"></span>
            </button>
            <button type="button" class="btn btn-outline-secondary"  onclick="showListQuestion();">List</button>
            <button type="button" class="btn btn-outline-secondary" onclick="prevQuestion();">Previous</button>
            <button  class="btn btn-light" id="question_srn"><?php echo $_smarty_tpl->tpl_vars['question_sr']->value+1;?>
 Of <?php echo $_smarty_tpl->tpl_vars['total_data']->value;?>
</button>
            <button type="button" class="btn btn-outline-secondary" onclick="nextQuestion();">Next</button>
            <button onclick="FinishedTest()" type="button" class="btn btn-outline-secondary">End Test</button >
        </div>
    </div>
</footer>
<?php echo '<script'; ?>
>
    // Set timer
  function startTimer(duration, display) {
    var timer = duration;
      
    setInterval(function () {
      var minutes = parseInt(timer / 60, 10);
      var seconds = parseInt(timer % 60, 10);
      var hour = "00";
      minutes = minutes < 10 ? "0" + minutes : minutes;
      seconds = seconds < 10 ? "0" + seconds : seconds;  
      display.textContent = hour + ":" + minutes + ":" + seconds;
  
      if (--timer < 0) {
        $("#attempt_div").html($("#attempt_quest").val());
        $("#unattempt_div").html($("#un_atempt_quest").val());
        endTest();
      }
    }, 1000);
  }
 
  window.onload = function () {
    var fiveMinutes = 60 * 15,
    display = document.querySelector("#time");
    startTimer(fiveMinutes, display);
  };

       // Prev Question 
    function prevQuestion(){
        var sr_num=0;
        var ques_list=0;
        var elementExists = document.getElementById("ques_id");
        if(elementExists){
            sr_num=elementExists.value;
            if(sr_num!=0){
                $("#question_srn").html(sr_num +' Of <?php echo $_smarty_tpl->tpl_vars['total_data']->value;?>
');
                $.ajax({
                    type: "POST",
                    url: "http://localhost/smarty_project/test/question.php?action=prev",
                    data: {
                        'qust_id' : sr_num,
                    },
                    success: function(responce){
                        $("#question_div").html(responce);
                    } 
                });  
            }
        }
    }

    // Next Question 
    function nextQuestion(){
        var sr_num=0;
        var position = document.getElementById("ques_id").value;
        var select_option= $("input[name=select_option]:checked").val();
        var select_value= 0;
        var quest_id= $("#question_id").val();
        sr_num= parseInt(position)+2;
        if(select_option){
            select_value=select_option;
        }
        $.ajax({
            type: "POST",
            url: "http://localhost/smarty_project/test/question.php?action=next",
            data: {
                'qust_id' : position,
                'select_option'  :   select_value,
                'content_id'  :   quest_id,
            },
            success: function(responce){
                $("#question_div").html(responce);
                if(end_test.value==1){
                    $("#attempt_div").html($("#attempt_quest").val());
                    $("#unattempt_div").html($("#un_atempt_quest").val());
                    endTest();
                }else{
                    $("#question_srn").html(sr_num +' Of <?php echo $_smarty_tpl->tpl_vars['total_data']->value;?>
');
                }
            } 
        });  
    }   

    // End test Button
    function FinishedTest(){
        var position = document.getElementById("ques_id").value;
        var select_value= 0;
        var select_option= $("input[name=select_option]:checked").val();
        if(select_option){
            select_value=select_option;
        }
        var quest_id= $("#question_id").val();
        $.ajax({
            type: "POST",
            url: "http://localhost/smarty_project/test/question.php?action=finishedTest",
            data: {
                'qust_id' : position,
                'select_option'  :   select_value,
                'content_id'  :   quest_id,
            },
            dataType: "json",
            success: function(responce){
                $("#attempt_div").html(responce.attempt_question);
                $("#unattempt_div").html(responce.unattempt_question);
                $('#endTestModal').modal('show');
            } 
        });  
    }


// switch of Quetion 
    function switchQuestion(position){
        document.getElementById("listData_div").style.width = "";
        var sr_num=0;
        var question_position=0;
        var select_option= $("input[name=select_option]:checked").val();
        var select_value= 0;
        var quest_id= $("#question_id").val();
        if(select_option){
            select_value=select_option;
        }
        sr_num= parseInt(position)+1;
        question_position= parseInt(position)-1;
        $.ajax({
            type: "POST",
            url: "http://localhost/smarty_project/test/question.php?action=next",
            data: {
                'qust_id' : question_position,
                'select_option'  :   select_value,
                'content_id'  :   quest_id,
            },
            // dataType: "json",
            success: function(responce){
                $("#question_div").html(responce);
                $("#question_srn").html(sr_num +' Of <?php echo $_smarty_tpl->tpl_vars['total_data']->value;?>
');
            } 
        });  
    }

     //List Data
    function showListQuestion(){
        var question_id=0;
        var width = document. getElementById('listData_div'). style. width;
        if(width){
            document.getElementById("listData_div").style.width = "";
        }else{
            question_id=document.getElementById("ques_id").value;
            document.getElementById("listData_div").style.width = "350px";
            $.ajax({
                type: "POST",
                url: "http://localhost/smarty_project/test/question.php?action=showList",
                data: {
                    'qust_id' : question_id,
                },
                success: function(responce){
                    $('#endTestModal').modal('hide');
                    $("#listData_div").html(responce);
                } 
            }); 
        } 
    }

 //End test modal Show 
    function endTest(){
        $('#endTestModal').modal('show');
    }  

    //Generate Result
    function generateResult(){
        window.location.href='http://localhost/smarty_project/result/';
    }

<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:../templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
