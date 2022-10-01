<?php
/* Smarty version 4.2.0, created on 2022-09-29 11:10:59
  from 'C:\xampp\htdocs\uCertify\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63356123a18a21_32659486',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43f1b78286097f0092a7d4ee5e4c4aed39486bbe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\uCertify\\templates\\index.tpl',
      1 => 1664260427,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63356123a18a21_32659486 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Ucertify"), 0, false);
?>

<div class="row mt-5">
    <div class="col-12 text-center">
        <h3 class="text-danger">Note: This Test have provided some Sortcut keys.</h3>
        <h5><span class="text-primary text-underline fw-bold text-decoration-underline">Press L</span> For <span class="text-success fw-bold text-decoration-underline">List Question</span></h5>
        <h5><span class="text-primary text-underline fw-bold text-decoration-underline">Press P</span> For <span class="text-success fw-bold text-decoration-underline">Previous Question</span></h5>
        <h5><span class="text-primary text-underline fw-bold text-decoration-underline">Press N</span> For <span class="text-success fw-bold text-decoration-underline">Next Question</span></h5>
        <h5><span class="text-primary text-underline fw-bold text-decoration-underline">Press D</span> For <span class="text-success fw-bold text-decoration-underline">End Test</span></h5>
    </div>
    <div class="col-12 text-center fixed-bottom mb-5">
        <button type="button" class="btn btn-light" onclick="window.location.href='http://localhost/uctest/test/';">Start Test</button>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
