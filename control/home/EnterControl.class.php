<?php
class EnterControl extends Control{
	//取消报名
	public function deleteEnter(){
		$enter=new EnterModel();
		$enter->ent_stu_id=$_SESSION['stu_id'];
		$enter->ent_pro_id=$_GET['pro_id'];
		$enter->deleteEnter();
		if($enter->deleteEnter()){
			redirectURL('index.php?group=Home&module=Index&act=index','取消报名成功，请重新报名','2');
		}else{
			redirectURL('index.php?group=Home&module=Student&act=center','取消报名失败，请重试','2');
		}
	}
	
}