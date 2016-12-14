<?php
header("content-type:text/html;charset=utf-8");
$root=str_replace('includes/init.php','',str_replace('\\','/',__FILE__));
define('ROOT',$root);
define('MODEL_DIR',ROOT."model/");


$group=isset($_REQUEST['group'])?$_REQUEST['group']:'Home';
$module=isset($_REQUEST['module'])?$_REQUEST['module']:'index';
$act=isset($_REQUEST['act'])?$_REQUEST['act']:'index';
define('TEMPLATES_DIR',ROOT."View/{$group}/{$module}/");
$config=include "config/config.php";

include ROOT."core/Application.class.php";
include ROOT."core/DbModel.class.php";
include ROOT."core/Model.class.php";
include ROOT."core/view.class.php";
include ROOT."core/control.class.php";

include ROOT."includes/Smarty/Smarty.class.php";

function auto($c_n){
	include MODEL_DIR.$c_n.".class.php";
}
spl_autoload_register('auto');
@session_start();
function redirectURL($url,$msg='',$second=1) {
	if($second==0) {
		//立即跳转
		header("location:$url");
		exit;//跳转后立马终止该脚本的执行
	}else{
		//引用模板完成跳转
		include "redirect.html";
		exit;
	}
}