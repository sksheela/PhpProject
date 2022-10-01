<?php
/* Smarty version 4.2.0, created on 2022-08-20 14:24:42
  from 'C:\xampp\htdocs\uctest\templates\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6300a1526bb4e6_50338794',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe96c57d9de81514b34edb23a6695091be252391' => 
    array (
      0 => 'C:\\xampp\\htdocs\\uctest\\templates\\footer.tpl',
      1 => 1660985150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6300a1526bb4e6_50338794 (Smarty_Internal_Template $_smarty_tpl) {
?>
</div>
<!-- End Test Modal -->
<div class="modal fade" id="endTestModal" tabindex="-1" aria-labelledby="endTestModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="endTestModalLabel">Confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text-center m-0 lh-lg ">This action will end your test, do you want to proceed?</p>
                <div class="row mt-2">
                    <div class="col-md-4 col-4 border-0  text-center">
                        <div class="fs-6 result_tab item-middle">
                            <div class="float-left">
                                <i class="bi bi-card-text"></i>
                            </div>
                            <div class="float-left text-nowrap">
                                <?php echo $_smarty_tpl->tpl_vars['total_data']->value;?>
  
                            </div>
                        </div>
                        <div class="height50 ml-4"><span class="d-none d-sm-inline-block">Items</span></div>
                    </div>
                    <div class="col-md-4 col-4 border-0  text-center">
                        <div class="fs-6 result_tab item-middle">
                            <div class="float-left">
                                <i class="bi bi-eye"></i>
                            </div>
                            <div class="float-left text-nowrap" id="attempt_div">0  
                            </div>
                        </div>
                        <div class="height50 ml-4"><span class="d-none d-sm-inline-block">Attempted</span></div>
                    </div>
                    <div class="col-md-4 col-4 border-0  text-center">
                        <div class="fs-6 result_tab item-middle">
                            <div class="float-left">
                                <i class="bi bi-eye-slash"></i>
                            </div>
                            <div class="float-left text-nowrap"  id="unattempt_div">
                                9  
                            </div>
                        </div>
                        <div class="height50 ml-4"><span class="d-none d-sm-inline-block">Unattempted</span></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-outline-primary" onclick="showListQuestion();">Go To Item List</button>
                <button type="button" class="btn btn-primary" onclick="generateResult();">End Test</button>
            </div>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
</BODY>
</HTML>
<?php }
}
