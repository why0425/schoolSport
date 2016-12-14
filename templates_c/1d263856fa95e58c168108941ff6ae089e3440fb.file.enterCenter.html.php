<?php /* Smarty version Smarty 3.1.4, created on 2016-10-23 13:51:11
         compiled from "view/Home/Student\enterCenter.html" */ ?>
<?php /*%%SmartyHeaderCode:27305580c1fde69b2a1-38452904%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d263856fa95e58c168108941ff6ae089e3440fb' => 
    array (
      0 => 'view/Home/Student\\enterCenter.html',
      1 => 1477201868,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27305580c1fde69b2a1-38452904',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_580c1fde6cf3a',
  'variables' => 
  array (
    'stu_name' => 0,
    'rows' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580c1fde6cf3a')) {function content_580c1fde6cf3a($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>报名个人中心</title>
</head>
<link rel="stylesheet" type="text/css" href="view/Home/Student/images/enter.css">
<body>
<br/><br/><br/><br/><br/><br/><br/>
<h2><?php echo $_smarty_tpl->tpl_vars['stu_name']->value;?>
 ----》 欢迎来到，湘南学院运动会个人中心</h2>
<br/><br/>
<table border="1" style="border:1px solid black;width:80%;font-size:25px;">
   <tr>
      <th>序号</th>
      <th>名字</th>
      <th>学号</th>
      <th>组别（男/女）</th>
      <th>年级、班级</th>
      <th>项目</th>
      <th>报名时间</th>
      <th>操作</th>     
   </tr>
   <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->iteration++;
?>
      <tr>
         <td><?php echo $_smarty_tpl->tpl_vars['v']->iteration;?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['v']->value['stu_name'];?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['v']->value['stu_xuehao'];?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['v']->value['stu_sex'];?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['v']->value['grade_name'];?>
、<?php echo $_smarty_tpl->tpl_vars['v']->value['class_name'];?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['v']->value['pro_name'];?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['v']->value['ent_add_time'];?>
</td>
         <td><a href="index.php?group=Home&module=Enter&act=deleteEnter&pro_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['pro_id'];?>
">取消报名</a>
         <a href="index.php?group=Home&module=Score&act=SelectScore&pro_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['pro_id'];?>
">查看成绩</a></td>
      </tr>
   <?php } ?>
</table>
</body>
</html><?php }} ?>