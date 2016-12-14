<?php /* Smarty version Smarty 3.1.4, created on 2016-10-22 13:12:47
         compiled from "view/Admin/Index\login.html" */ ?>
<?php /*%%SmartyHeaderCode:1941580aee6ebb2204-94164399%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa45df5a1fb5867a785ac82b3a48afdaef7c6633' => 
    array (
      0 => 'view/Admin/Index\\login.html',
      1 => 1477111742,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1941580aee6ebb2204-94164399',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_580aee6ebf2c6',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580aee6ebf2c6')) {function content_580aee6ebf2c6($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>后台首页</title>
<link rel="stylesheet" type="text/css" href="view/Admin/Index/Css/index.css">
</head>

<body>
<div id="ke" >
<form action="index.php" method="post">
    <span id="font">Admin Login</span><br/><br/>
       管理员：<input type="text" name="admin_name" style="width:40%;height:5%;">&nbsp;<br/>
 <br/>
       密&nbsp;&nbsp;&nbsp;码：<input type="password" name="admin_pwd" style="width:40%;height:5%;">&nbsp;
<br/><br/><br/>
<input type="hidden" name="group" value="Admin">
<input type="hidden" name="module" value="Index">
<input type="hidden" name="act" value="check_admin">
	<input type="submit" style="width:15%;height:7%;font-size:20px;font-weight:bold;color:#363636" value="登录">&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
    <input type="reset" style="width:15%;height:7%;font-size:20px;font-weight:bold;color:#363636"value="重置">
</form>
</div>
</body>
</html><?php }} ?>