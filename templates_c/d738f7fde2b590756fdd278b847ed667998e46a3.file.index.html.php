<?php /* Smarty version Smarty 3.1.4, created on 2016-12-06 08:42:25
         compiled from "view/Home/index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:47835807717e9a15c4-02009188%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd738f7fde2b590756fdd278b847ed667998e46a3' => 
    array (
      0 => 'view/Home/index\\index.html',
      1 => 1477800818,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '47835807717e9a15c4-02009188',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_5807717ea5fcb',
  'variables' => 
  array (
    'stu_name' => 0,
    'rows' => 0,
    'v' => 0,
    'stu_sex' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5807717ea5fcb')) {function content_5807717ea5fcb($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>运动会首页</title>
</head>
<link rel="stylesheet" type="text/css" href="View/Home/Index/images/index.css" />
<script type="text/javascript" src="includes/jquery/jquery.js"></script>
<script type="text/javascript">
   $(document).ready(function(){  	
    	$('#img1').hover(dis1,dis2);
    	function dis1(){
    		$('#img1').attr('src','View/Home/Index/images/gg1.png');
        }
        function dis2(){
        	$('#img1').attr('src','View/Home/Index/images/bj.png');
        }      
        //setTimeout("location.reload()",2000);
   });
   $(document).ready(function () {      
       setInterval("startRequest()",1000);
      //setInterval这个函数会根据后面定义的1000既每隔1秒执行一次前面那个函数
      //如果你用局部刷新，要用AJAX技术
    });    
    function startRequest(){
    	var mydate = new Date();
    	var t = mydate.toLocaleString();
        $("#time").text(t);
    }
</script>
<body>
<div class="body">
    <div class="top1">  <span id="time"></span> 
        <div class="stu"> 
          <?php if ($_smarty_tpl->tpl_vars['stu_name']->value){?>
	           <?php echo $_smarty_tpl->tpl_vars['stu_name']->value;?>
 你好,欢迎您来到湘南学院田径运动会报名系统！
	           <input type="button" value="个人中心" onclick="location.href='index.php?group=Home&module=Student&act=center'">
	           <input type="button" value="注销" onclick="location.href='index.php?group=Home&module=Index&act=delete_session'">
           <?php }else{ ?>
               <input type="button" value="登录" onclick="location.href='index.php?group=Home&module=Index&act=login'">       
          <?php }?>
        
           <input type="button" value="注册" onclick="location.href='index.php?group=Home&module=Student&act=insert'">
           <input type="button" value="管理员" onclick="location.href='index.php?group=Admin&module=Index&act=Login'">
          
        </div>   
    </div>
    <div  class="top2">
       <img src="View/Home/Index/images/bj.png" id="img1" width="93%" height="380px">
    </div>
    <div class="msg">
       <marquee scrollamount='5' direction="left">公告：欢迎来到湘南学院校运会报名系统。。。。。   本次校运会的时间为2016年11月1日----2016年11月3日</marquee>
    </div>
    <div class="main">
       <div class="project">
         <h2>本次运动会的项目</h2>
          <div class="gundong">
           <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
           <b><?php echo $_smarty_tpl->tpl_vars['v']->value['pro_name'];?>
</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     
           <?php } ?> 
           <br/>(注：每人只能最多报两项，每项最多可参加20人)
          </div>
       </div>
       <div class="project1">
         <h2><?php echo $_smarty_tpl->tpl_vars['stu_sex']->value;?>
子组的项目</h2>
          <div class="gundong">
           <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
           <p><a href="#"><?php echo $_smarty_tpl->tpl_vars['v']->value['pro_name'];?>
</a> (注：每人只能最多报两项，每项最多可参加20人)
           <input type="button" value="报名" onclick="location.href='index.php?group=Home&module=Project&act=join&pro_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['pro_id'];?>
'"></p>
           <?php } ?>
          </div>
       </div>
       
    </div>
<div>
</body>
</html><?php }} ?>