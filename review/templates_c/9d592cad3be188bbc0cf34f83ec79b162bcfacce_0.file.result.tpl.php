<?php
/* Smarty version 4.2.0, created on 2022-08-22 10:38:48
  from 'C:\xampp\htdocs\uctest\templates\result.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63030f60815c67_59450387',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d592cad3be188bbc0cf34f83ec79b162bcfacce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\uctest\\templates\\result.tpl',
      1 => 1661144922,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../templates/header.tpl' => 1,
    'file:../templates/footer.tpl' => 1,
  ),
),false)) {
function content_63030f60815c67_59450387 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="row">
    <div class="col-12"> 
        <p class="fs-3 text-center " tabindex="0">ucertify Test Prep</p>
    </div>

    <div class="col-12"> 
        <p class="fs-5 text-center" tabindex="0" ><span class="text-danger" tabindex="0"> Test MODE</span> <span class="fw-bold" tabindex="0">ON </span><?php echo $_smarty_tpl->tpl_vars['generate_datetime']->value;?>
 IST,<span class="text-success" tabindex="0"> TIME GIVEN</span>: 14 m 30 s</p>
    </div>

    <div class="col-12 text-center"> 
        <button class="btn btn-outline-primary" type="button" >
            <span><i class="bi bi-file-bar-graph"></i></span><span class="px-2"><?php echo $_smarty_tpl->tpl_vars['user_data']->value['result'];?>
%</span>
            <span>Result</span>
        </button>
        <button class="btn btn-outline-primary" type="button" onclick="filterSelection('all')">
            <span><i class="bi bi-card-text"></i></span><span class="px-2"><?php echo $_smarty_tpl->tpl_vars['user_data']->value['items'];?>
</span>
            <span>Items</span>
        </button>
        <button class="btn btn-outline-primary" type="button" onclick="filterSelection('correct')">
            <span class="text-success"><i class="bi bi-check-lg"></i></span><span class="px-2"><?php echo $_smarty_tpl->tpl_vars['user_data']->value['correct'];?>
</span>
            <span>Correct</span>
        </button>
        <button class="btn btn-outline-primary" type="button" onclick="filterSelection('wrong')">
            <span class="text-danger"><i class="bi bi-x-lg"></i></span><span class="px-2"><?php echo $_smarty_tpl->tpl_vars['user_data']->value['in_correct'];?>
</span>
            <span>Incorrect</span>
        </button>
        <button class="btn btn-outline-primary" type="button" onclick="filterSelection('un_attempt')">
            <span class="text-warning"><i class="bi bi-eye-slash"></i></span><span class="px-2"><?php echo $_smarty_tpl->tpl_vars['user_data']->value['unattempt'];?>
</span>
            <span>Unattempted</span>
        </button>
    </div>
    
    <div class="col-12 mt-3"> 
        <div class="table-responsive">
            <table class="table table-striped">
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['display_data']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['is_attempt'] == '1' && $_smarty_tpl->tpl_vars['item']->value['is_user_select_option'] == '1') {?>
                            <?php $_smarty_tpl->_assignInScope('class', "correct");?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['is_attempt'] == '1' && $_smarty_tpl->tpl_vars['item']->value['is_user_select_option'] == '0') {?>
                            <?php $_smarty_tpl->_assignInScope('class', "wrong");?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->_assignInScope('class', "un_attempt");?>
                        <?php }?>
                        <tr class="filter-question show <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
" tabindex="0">
                            <td class="align-middle positio.n-relative" tabindex="0">
                                <div class="float-start"><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</div>
                            </td>
                            <td class="placeholder col-10" tabindex="0">
                                <div class=""><a href="javascript:ReviewQuestion(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['item']->value['content_id'];?>
,<?php echo $_smarty_tpl->tpl_vars['item']->value['user_select_option'];?>
)" class="link-dark text-decoration-none"><?php echo $_smarty_tpl->tpl_vars['item']->value['question'];?>
</a></div>
                            </td>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['answers'], 'item_data', false, 'key');
$_smarty_tpl->tpl_vars['item_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item_data']->value) {
$_smarty_tpl->tpl_vars['item_data']->do_else = false;
?>
                                <td scope="row" tabindex="0">
                                    <div class="d-flex justify-content-center">
                                        <?php if ($_smarty_tpl->tpl_vars['item_data']->value['is_correct'] == '1' && $_smarty_tpl->tpl_vars['item']->value['is_user_select_option'] == '1') {?>
                                        <div class="answer_bullets user_answer"><?php echo $_smarty_tpl->tpl_vars['show_options']->value[$_smarty_tpl->tpl_vars['key']->value];?>
</div>
                                        <?php } elseif ((($_smarty_tpl->tpl_vars['item_data']->value['is_correct'] == '1') && ($_smarty_tpl->tpl_vars['item']->value['is_attempt'] == '0')) || (($_smarty_tpl->tpl_vars['item_data']->value['is_correct'] == '1') && ($_smarty_tpl->tpl_vars['item']->value['is_attempt'] == '1'))) {?>
                                            <div class="answer_bullets correct_answer "><?php echo $_smarty_tpl->tpl_vars['show_options']->value[$_smarty_tpl->tpl_vars['key']->value];?>
</div>
                                        <?php } elseif ((($_smarty_tpl->tpl_vars['item_data']->value['id'] == $_smarty_tpl->tpl_vars['item']->value['user_select_option']) && $_smarty_tpl->tpl_vars['item']->value['is_attempt'] == '1')) {?>
                                            <div class="answer_bullets wrong_answer"><?php echo $_smarty_tpl->tpl_vars['show_options']->value[$_smarty_tpl->tpl_vars['key']->value];?>
</div>
                                        <?php } else { ?>
                                            <div class="answer_bullets"><?php echo $_smarty_tpl->tpl_vars['show_options']->value[$_smarty_tpl->tpl_vars['key']->value];?>
</div>
                                        <?php }?>
                                    </div>
                                </td>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value['is_attempt'] == '1' && $_smarty_tpl->tpl_vars['item']->value['is_user_select_option'] == '1') {?>
                                <td scope="row" tabindex="0">
                                    <i class="bi bi-check-lg"></i>
                                </td>
                            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['is_attempt'] == '1' && $_smarty_tpl->tpl_vars['item']->value['is_user_select_option'] == '0') {?>
                                <td scope="row" tabindex="0">
                                    <i class="bi bi-x-lg">
                                </td>
                            <?php } else { ?>
                                <td scope="row" tabindex="0">
                                    <i class="bi bi-eye-slash"></i>
                                </td>
                            <?php }?>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
>
    function filterSelection(options) {
        var total_element, i;
        total_element = document.getElementsByClassName("filter-question");
        // console.log(total_element);
        var sr_num=1;
        if (options == "all") options = "";
        for (i = 0; i < total_element.length; i++) {
            tableRemoveClass(total_element[i], "show");
            if (total_element[i].className.indexOf(options) > -1) {
                tableAddClass(total_element[i], "show",sr_num);
                sr_num++;
            }
        }
    }

    function tableAddClass(element, name, sr_num) {
        var i, element_1, element_2;
        element_1 = element.className.split(" ");
        element_2 = name.split(" ");
        for (i = 0; i < element_2.length; i++) {
            if (element_1.indexOf(element_2[i]) == -1) {
                element.childNodes['1'].childNodes['1'].innerHTML=sr_num;
                element.className += " " + element_2[i];
            }
        }
    }

    function tableRemoveClass(element, name) {
        var i, element_1, element_2;
        element_1 = element.className.split(" ");
        element_2 = name.split(" ");
        for (i = 0; i < element_2.length; i++) {
            while (element_1.indexOf(element_2[i]) > -1) {
                element_1.splice(element_1.indexOf(element_2[i]), 1);     
            }
        }
        element.className = element_1.join(" ");
    }

    // When the User click the Question 
    function ReviewQuestion(position,content_id,user_select_option){
        console.log("position =>"+position);
        console.log("content_id =>"+content_id);
        console.log("user_select_option =>"+user_select_option);
        // document.getElementById("listData_div").style.width = "";
        // var sr_num=0;
        // var question_position=0;
        // var select_option= $("input[name=select_option]:checked").val();
        // var select_value= 0;
        // var quest_id= $("#question_id").val();
        // if(select_option){
        //     select_value=select_option;
        // }
        // sr_num= parseInt(position)+1;
        // question_position= parseInt(position)-1;
        // $.ajax({
        //     type: "POST",
        //     url: "http://localhost/uctest/test/question.php?action=next",
        //     data: {
        //         'qust_id' : question_position,
        //         'select_option'  :   select_value,
        //         'content_id'  :   quest_id,
        //     },
        //     // dataType: "json",
        //     success: function(responce){
        //         $("#question_div").html(responce);
        //         $("#question_srn").html(sr_num+' To ');
        //     } 
        // });  
    }
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:../templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
