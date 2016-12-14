<?php /* Smarty version Smarty 3.1.4, created on 2016-10-21 08:43:11
         compiled from "view/Home/Index\login.html" */ ?>
<?php /*%%SmartyHeaderCode:900858088a97d99de1-83942961%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3ee8df1a5823928c9acaa1a9afd2c84a3cfd47b' => 
    array (
      0 => 'view/Home/Index\\login.html',
      1 => 1477010590,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '900858088a97d99de1-83942961',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_58088a97dd958',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58088a97dd958')) {function content_58088a97dd958($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>登录页面</title>
<link rel="stylesheet" type="text/css" href="view/Home/Index/images/login.css">
</head>
<body>
<div id="login">
<h3>用户登录表</h3>
<form action="index.php" method="post">
姓名：<input type="text" name="stu_name">&nbsp;【<span id="name">请输入您的姓名</span>】<br/><br/>
密码：<input type="password" name="stu_pwd">&nbsp;【<span id="pwd">请输入您的密码</span>】<br/><br/>
<input type="hidden" name="group" value="Home">
<input type="hidden" name="module" value="index">
<input type="hidden" name="act" value="checkLogin">
<input type="submit" value="登录">
<input type="reset" value="重置">


</form>
</div>
</body>
</html><?php }} ?>