<?php /* Smarty version Smarty 3.1.4, created on 2016-10-20 08:23:11
         compiled from "view/Home/index\login.html" */ ?>
<?php /*%%SmartyHeaderCode:3025258080dfcefab89-27153491%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14bd5d3373eee3f1cfeb77d703b084ebc511735c' => 
    array (
      0 => 'view/Home/index\\login.html',
      1 => 1476922990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3025258080dfcefab89-27153491',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_58080dfd0094f',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58080dfd0094f')) {function content_58080dfd0094f($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>登录页面</title>
<link rel="stylesheet" type="text/css" href="view/Home/Index/images/login.css">
</head>
<body>
<div id="login">
<h3>用户登录表</h3>
<form action="index.php?group=Home&module=Student&act=check_login" method="post">
姓名：<input type="text" name="stu_name">&nbsp;【<span id="name">请输入您的姓名</span>】<br/><br/>
密码：<input type="text" name="stu_pwd">&nbsp;【<span id="pwd">请输入您的学号</span>】<br/><br/>

<input type="submit" value="登录">
<input type="reset" value="重置">


</form>
</div>
</body>
</html><?php }} ?>