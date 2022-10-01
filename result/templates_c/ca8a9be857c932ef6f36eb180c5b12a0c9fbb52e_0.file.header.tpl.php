<?php
/* Smarty version 4.2.0, created on 2022-09-30 14:14:13
  from 'C:\xampp\htdocs\smarty_project\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6336ac5d37ae97_62128344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca8a9be857c932ef6f36eb180c5b12a0c9fbb52e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty_project\\templates\\header.tpl',
      1 => 1664527328,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6336ac5d37ae97_62128344 (Smarty_Internal_Template $_smarty_tpl) {
?><HTML>
<HEAD>
    <TITLE><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</TITLE>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <style>
        .answer_bullets {
            line-height: 14px;
            padding: 3px 3px;
            margin: 0px -10px;
            float: left;
            text-align: center;
            border-radius: 50%;
            color: #aea8a8;
            background: #fff;
            border: 1px solid #aea8a8;
            font-size: 13px;
            font-weight: 700;
            width: 22px;
            height: 22px;
        }
        .correct_answer {
            color: #16a41c!important;
            border: 1px solid #1ab81f!important;
        }

        .wrong_answer {
            color: #fff!important;
            background: #e37475!important;
            border: 1px solid #e37475!important;
        }
        
        .user_answer {
            color: #fff;
            background: #16a41c!important;
            border: 1px solid #16a41c!important;
        }

        .filter-question {
            display: none;
        }

        .show {
            display: block;
        }

        .sidepanel  {
            width: 0;
            position: fixed;
            z-index: 1;
            height: 250px;
            top: 0;
            left: 0;
            background-color: #ffff;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }
        .sidepanel a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #0d0505;
            display: block;
            transition: 0.3s;
        }

        .sidepanel a:hover {
            color: #f1f1f1;
        }
        .height500{
            /* height:500px; */
            height: -webkit-fill-available;
        }

        .square {
            height: 26px;
            width: 26px;
            line-height: 20px;
            padding: 3px 3px;
            text-align: center;
            border-radius: 50%;
            color: #eee;
            background: #616970;
            font-size: 12px;
        }

        .mt-n5{
            margin-top:-2.75rem!important
        }
        .btn_active{
            color: #fff;
            background-color: #0d6efd;
            border-color: #0d6efd;
        }
    </style>
</HEAD>
<BODY bgcolor="#d4d4d4">
    <div class="container mt-2">
        <div class="row">
        <hr/>
            <div class="col-sm-4">
                <a href='http://localhost/smarty_project/' target="_parent"><img onerror="this.style.display='none'" class="logo-v mw-100 show_popup_msg navbar-brand"  src="https://www.ucertify.com/layout/themes/bootstrap4/images/logo/ucertify_logo.png" alt="uCertify Logo"></a>
            </div>
            <div class="col-sm-8">
                <h1 class="text-danger">uCertify Prep Test</h1>
            </div>
             <hr/>
        </div> 
    
<?php }
}
