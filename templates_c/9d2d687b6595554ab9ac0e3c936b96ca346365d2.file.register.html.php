<?php /* Smarty version Smarty 3.1.4, created on 2016-10-20 08:07:04
         compiled from "view/Home/index\register.html" */ ?>
<?php /*%%SmartyHeaderCode:24702580809bcc02890-58508301%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d2d687b6595554ab9ac0e3c936b96ca346365d2' => 
    array (
      0 => 'view/Home/index\\register.html',
      1 => 1476922020,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24702580809bcc02890-58508301',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_580809bcc78c4',
  'variables' => 
  array (
    'option1_id' => 0,
    'option1_name' => 0,
    'option2_id' => 0,
    'option2_name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580809bcc78c4')) {function content_580809bcc78c4($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'D:\amp\apache\www\kehouyuxi\10month\Jquery\10.19\includes\Smarty\plugins\function.html_options.php';
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>用户注册</title>
<link rel="stylesheet" type="text/css" href="view/Home/Index/images/register.css">
<script type="text/javascript">
   var xuehao=document.getElementById('xuehao');
   xuehao.alert('ok');
</script>
</head>
<body>
<div id="reg">
<h3>用户注册表</h3>
<form action="index.php?group=Home&module=Student&act=resgi_user" method="post">
姓名：<input type="text" name="stu_name">&nbsp;【<span id="name">请输入您的姓名</span>】<br/><br/>
学号：<input type="text" name="stu_xuehao">&nbsp;【<span id="xuehao">请输入您的学号</span>】<br/><br/>
密码：<input type="text" name="stu_pwd">&nbsp;【<span id="pwd">请输入您的密码</span>】<br/><br/>
性别：<input type="radio" value="男">男<input type="radio" value="女">女<br/><br/>
年级：<select name=grade>
          <option>【请选择年级】</option>
          <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['option1_id']->value,'output'=>$_smarty_tpl->tpl_vars['option1_name']->value),$_smarty_tpl);?>

     </select>&nbsp;【<span id="grade">请输入您的年级</span>】<br/><br/>
班级：<select name=class>
          <option>【请选择班级】</option>
          <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['option2_id']->value,'output'=>$_smarty_tpl->tpl_vars['option2_name']->value),$_smarty_tpl);?>

     </select>&nbsp;【<span id="class">请输入您的班级</span>】<br/><br/>
<input type="submit" value="注册">
<input type="reset" value="重置">


</form>
</div>
</body>
</html><?php }} ?>