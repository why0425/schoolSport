<?php /* Smarty version Smarty 3.1.4, created on 2016-10-24 18:20:30
         compiled from "view/Admin/Enter\enter.html" */ ?>
<?php /*%%SmartyHeaderCode:28728580af5f806b5f3-43478074%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a02788b91546476fa40c0698d545f506ee06447' => 
    array (
      0 => 'view/Admin/Enter\\enter.html',
      1 => 1477269054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28728580af5f806b5f3-43478074',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_580af5f80a337',
  'variables' => 
  array (
    'rows' => 0,
    'k' => 0,
    'v' => 0,
    'grade_id' => 0,
    'class_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580af5f80a337')) {function content_580af5f80a337($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Insert title here</title>
</head>
<script type="text/javascript" src="includes/jquery/jquery.js"></script>

</style>
<script type="text/javascript">
   $(document).ready(function(){
	   //通过名字查询
	   $('#stu_name').bind('keyup',func1);
	   function func1(){
		   name=$('#stu_name').val();
		   $.get('index.php',{'group':'Admin','module':'Enter','act':'getName','name':name},function(msg){
			   $('#table').html(msg);
		   });
	   }
	   //通过性别查询
	   $('#stu_sex').bind('keyup',func2);
	   function func2(){
		   sex=$('#stu_sex').val();
		   $.get('index.php',{'group':'Admin','module':'Enter','act':'getSex','sex':sex},function(msg){
			   $('#table').html(msg);
		   });
	   }
	   //通过项目
	   $('#pro_id').bind('change',func3);
	   function func3(){
		   pro_id=$('#pro_id').val();
		   $.get('index.php',{'group':'Admin','module':'Enter','act':'getProject','pro_id':pro_id},function(msg){
			   $('#table').html(msg);
		   });		   
	   }
	   //通过年级查询
	   $('#grade_id').bind('change',func4);
	   function func4(){
		   grade_id=$('#grade_id').val();
		   $.get('index.php',{'group':'Admin','module':'Enter','act':'getGrade','grade_id':grade_id},function(msg){
			   $('#table').html(msg);
		   });		   
	   }
	   //通过班级查询
	   $('#class_id').bind('change',func5);
	   function func5(){
		   class_id=$('#class_id').val();
		   $.get('index.php',{'group':'Admin','module':'Enter','act':'getClass','class_id':class_id},function(msg){
			   $('#table').html(msg);
		   });		   
	   }
   });
</script>
<link rel="stylesheet" type="text/css" href="view/Admin/Enter/image/enter.css">
<body>
<h3>运动会项目分布</h3><br/><br/>
学生名字：<input type="text" id="stu_name">
学生性别：<input type="text" id="stu_sex">
比赛项目：<select name='pro_id' id="pro_id"> 
           <option>【请选择】</option>
           <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
           <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" ><?php echo $_smarty_tpl->tpl_vars['v']->value['pro_name'];?>
</option>;     
           <?php } ?>
        </select>
比赛年级：<select name='grade_id' id="grade_id"> 
           <option>【请选择】</option>
           <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['grade_id']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
           <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" ><?php echo $_smarty_tpl->tpl_vars['v']->value['grade_name'];?>
</option>;     
           <?php } ?>
        </select>
 比赛班级：<select name='class_id' id="class_id"> 
		    <option>【请选择】</option>
		    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['class_id']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
		    <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" ><?php echo $_smarty_tpl->tpl_vars['v']->value['class_name'];?>
</option>;     
		    <?php } ?>
        </select>
<div id="table"></div>
</table>
</body>
</html>
<?php }} ?>