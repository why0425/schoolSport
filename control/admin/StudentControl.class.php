<?php
class StudentControl extends Control{
	//查看详情
	public function search_stu(){
		
		$enter=new EnterModel();
		$enter->ent_stu_id=$_GET['stu_id'];
		$enter->ent_pro_id=$_GET['pro_id'];	
		$row=$enter->getInfo();
		$admin_name=$_SESSION['admin_name'];
		$this->smarty->assign('admin',$admin_name);
		$this->smarty->assign('res',$row);
		//显示名次
		$win=new WinModel();
		$rows=$win->SelectAll();
		$this->smarty->assign('rows',$rows);
		
		$this->smarty->display('admin_person.html');
	}
	//取消报名
	public function delete(){
		$enter=new EnterModel();
		$enter->ent_stu_id=$_GET['stu_id'];
		$enter->ent_pro_id=$_GET['pro_id'];
		$res=$enter->deleteEnter();
		if($res){
			redirectURL('index.php?group=Admin&module=Enter&act=admin_person','取消报名成功','2');
		}else{
			redirectURL('index.php?group=Admin&module=Enter&act=admin_person','取消报名失败','2');
		}
	}
}