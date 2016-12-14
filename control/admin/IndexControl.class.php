<?php
class IndexControl extends Control{
	public function Login(){
		$this->smarty->display('login.html');
	}
	public function check_admin(){
		$admin=new AdminModel();
		$admin->adm_name=$_POST['admin_name'];
		$admin->adm_pwd=$_POST['admin_pwd'];
		$res=$admin->check_admin();
		if($res){
			$_SESSION['admin_name']=$res['adm_name'];
			header("location:index.php?group=Admin&module=Enter&act=admin_person");
		}else{
			header("location:index.php?group=Admin&module=Index&act=login");
		}
	}
	
	
}