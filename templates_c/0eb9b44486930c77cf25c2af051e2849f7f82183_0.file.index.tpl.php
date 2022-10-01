<?php
/* Smarty version 4.2.0, created on 2022-09-30 07:57:58
  from 'C:\xampp\htdocs\uctest\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6336856636f4c9_47586799',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0eb9b44486930c77cf25c2af051e2849f7f82183' => 
    array (
      0 => 'C:\\xampp\\htdocs\\uctest\\templates\\index.tpl',
      1 => 1664517473,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6336856636f4c9_47586799 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="row mt-5">
    <div class="col-sm-12 text-center" style="margin-top:10rem;">
        <button type="button" class="btn btn-outline-success" onclick="window.location.href='http://localhost/uctest/test/';">Start Test</button>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
