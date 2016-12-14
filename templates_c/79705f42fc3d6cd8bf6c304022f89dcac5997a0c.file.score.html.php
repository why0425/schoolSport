<?php /* Smarty version Smarty 3.1.4, created on 2016-10-25 20:38:26
         compiled from "view/Home/Score\score.html" */ ?>
<?php /*%%SmartyHeaderCode:23138580c556c985f44-63782588%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79705f42fc3d6cd8bf6c304022f89dcac5997a0c' => 
    array (
      0 => 'view/Home/Score\\score.html',
      1 => 1477399104,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23138580c556c985f44-63782588',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_580c556ca323e',
  'variables' => 
  array (
    'stu_name' => 0,
    'res' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580c556ca323e')) {function content_580c556ca323e($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>成绩</title>
</head>
<link rel="stylesheet" type="text/css" href="view/Home/Score/images/enter.css">
<body>
<br/><br/><br/><br/><br/><br/><br/>
<h2><?php echo $_smarty_tpl->tpl_vars['stu_name']->value;?>
 ----》 欢迎来到，湘南学院运动会个人成绩中心</h2>
<br/><br/>
<div>
<p id="top">个人信息及成绩</p>
   <p>姓名:<span><?php echo $_smarty_tpl->tpl_vars['res']->value['stu_name'];?>
</span></p>
   <p>学号:<span><?php echo $_smarty_tpl->tpl_vars['res']->value['stu_xuehao'];?>
</span></p>
   <p>性别:<span><?php echo $_smarty_tpl->tpl_vars['res']->value['stu_sex'];?>
</span></p>
   <p>年级:<span><?php echo $_smarty_tpl->tpl_vars['res']->value['grade_name'];?>
</span></p>
   <p>班级:<span><?php echo $_smarty_tpl->tpl_vars['res']->value['class_name'];?>
</span></p>
   <p>项目:<span><?php echo $_smarty_tpl->tpl_vars['res']->value['pro_name'];?>
</span></p>
   <p>成绩:<span id="score"><?php echo $_smarty_tpl->tpl_vars['res']->value['win_name'];?>
</span></p>
</div>
</body>
</html><?php }} ?>