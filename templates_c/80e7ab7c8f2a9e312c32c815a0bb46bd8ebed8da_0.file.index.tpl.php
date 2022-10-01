<?php
/* Smarty version 4.2.0, created on 2022-09-30 10:39:47
  from 'C:\xampp\htdocs\smarty_project\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6336ab53b66e20_66286391',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80e7ab7c8f2a9e312c32c815a0bb46bd8ebed8da' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty_project\\templates\\index.tpl',
      1 => 1664527172,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6336ab53b66e20_66286391 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="row mt-5">
    <div class="col-sm-12 text-center" style="margin-top:10rem;">
        <button type="button" class="btn btn-outline-success" onclick="window.location.href='http://localhost/smarty_project/test/';">Start Test</button>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
