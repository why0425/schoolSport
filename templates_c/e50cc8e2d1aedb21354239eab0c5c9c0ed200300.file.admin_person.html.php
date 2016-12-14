<?php /* Smarty version Smarty 3.1.4, created on 2016-10-25 19:43:27
         compiled from "view/Admin/Student\admin_person.html" */ ?>
<?php /*%%SmartyHeaderCode:29872580c73f0a94f57-35850202%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e50cc8e2d1aedb21354239eab0c5c9c0ed200300' => 
    array (
      0 => 'view/Admin/Student\\admin_person.html',
      1 => 1477311422,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29872580c73f0a94f57-35850202',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_580c73f0b0850',
  'variables' => 
  array (
    'res' => 0,
    'admin' => 0,
    'rows' => 0,
    'k' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580c73f0b0850')) {function content_580c73f0b0850($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>个人中心</title>
</head>
<link rel="stylesheet" type="text/css" href="view/Admin/Student/images/enter.css">
<script type="text/javascript" src="includes/jquery/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	//添加成绩
	$('#bt2').bind('click',func1);
	//修改成绩
	$('#bt1').bind('click',func2);
} );
//添加成绩
function func1(){
	$("#select").show();
	$("#select").bind('change',function(){		   
		win_id=$('#select').val();
	    $.post('index.php',{'group':'Admin','module':'score','act':'insert','win_id':win_id,
	    	  'stu_id':<?php echo $_smarty_tpl->tpl_vars['res']->value['stu_id'];?>
,'grade_id':<?php echo $_smarty_tpl->tpl_vars['res']->value['grade_id'];?>
,'class_id':<?php echo $_smarty_tpl->tpl_vars['res']->value['class_id'];?>
,
	    	  'pro_id':<?php echo $_smarty_tpl->tpl_vars['res']->value['pro_id'];?>
,'stu_sex':"<?php echo $_smarty_tpl->tpl_vars['res']->value['stu_sex'];?>
"},function(msg){
	    		  //传值不成功   //window.location.href="jb51.jsp?backurl="+window.location.href;
			   			if(msg==1){
			   				window.location.href="index.php?group=Admin&module=Student&act=search_stu&stu_id=<?php echo $_smarty_tpl->tpl_vars['res']->value['stu_id'];?>
&pro_id=<?php echo $_smarty_tpl->tpl_vars['res']->value['pro_id'];?>
";
			   			}else{
			   				window.location.href="index.php?group=Admin&module=Student&act=search_stu&stu_id=<?php echo $_smarty_tpl->tpl_vars['res']->value['stu_id'];?>
&pro_id=<?php echo $_smarty_tpl->tpl_vars['res']->value['pro_id'];?>
";
			   			}   
	    },'text');
	});
}
//修改成绩
function func2(){
	$("#select1").show();
	$("#select1").bind('change',function(){		   
		win_id=$('#select1').val();
	    $.post('index.php',{'group':'Admin','module':'Score','act':'update','win_id':win_id,
	    	  'stu_id':<?php echo $_smarty_tpl->tpl_vars['res']->value['stu_id'];?>
,'grade_id':<?php echo $_smarty_tpl->tpl_vars['res']->value['grade_id'];?>
,'class_id':<?php echo $_smarty_tpl->tpl_vars['res']->value['class_id'];?>
,	    	  
	    	  'pro_id':<?php echo $_smarty_tpl->tpl_vars['res']->value['pro_id'];?>
,'stu_sex':"<?php echo $_smarty_tpl->tpl_vars['res']->value['stu_sex'];?>
"},function(msg){
	    		  
	    		  if(msg==1){
		   				window.location.href="index.php?group=Admin&module=Student&act=search_stu&stu_id=<?php echo $_smarty_tpl->tpl_vars['res']->value['stu_id'];?>
&pro_id=<?php echo $_smarty_tpl->tpl_vars['res']->value['pro_id'];?>
";
		   			}else{
		   				window.location.href="index.php?group=Admin&module=Student&act=search_stu&stu_id=<?php echo $_smarty_tpl->tpl_vars['res']->value['stu_id'];?>
&pro_id=<?php echo $_smarty_tpl->tpl_vars['res']->value['pro_id'];?>
";
		   			}   
	    },'text');
	});
}

</script>
<body>
<br/><br/>
<h2><?php echo $_smarty_tpl->tpl_vars['admin']->value;?>
 :====>>  欢迎来到后台学生管理中心</h2>
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
   <p>成绩:<span id="score" style="text-decoration:none;">
    <?php if ($_smarty_tpl->tpl_vars['res']->value['sco_score']){?><?php echo $_smarty_tpl->tpl_vars['res']->value['win_name'];?>
<br/>
    <input type="button" value="修改成绩" id="bt1">
    <select name="win_id" id="select1" style="display:none;">
          <option>【请选择名次】</option>
         <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
           <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" 
              <?php if ($_smarty_tpl->tpl_vars['k']->value==$_smarty_tpl->tpl_vars['res']->value['sco_score']-1){?>selected="selected"
                
              <?php }?>
            >
              <?php echo $_smarty_tpl->tpl_vars['v']->value['win_name'];?>
                
           </option>
         <?php } ?>
    </select>
       <?php }else{ ?>暂无成绩 <br/>
    <input type="button" value="添加成绩" id="bt2">
    <select name="win_id" id="select" style="display:none;">
          <option>【请选择名次】</option>
         <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
           <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['win_name'];?>
</option>
         <?php } ?>
   </select>
    <?php }?>
   </span></p>
</div>
</body>
</html><?php }} ?>