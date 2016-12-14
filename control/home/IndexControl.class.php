<?php
class IndexControl extends Control{
	public function Index(){
		$project=new ProjectModel();
		$rows=$project->selectAll();	
		$this->smarty->assign('rows',$rows);
		$stu_name=isset($_SESSION['stu_name'])?$_SESSION['stu_name']:'';
		$stu_sex=isset($_SESSION['stu_sex'])?$_SESSION['stu_sex']:'男';
		
		$this->smarty->assign('stu_name',$stu_name);
		$this->smarty->assign('stu_sex',$stu_sex);
		$this->smarty->display('index.html');
	}
	public function login(){
		$this->smarty->display('login.html');
	}
	public function checkLogin(){
		$student=new StudentModel();
		$student->stu_name=$_POST['stu_name'];
		$student->stu_pwd=$_POST['stu_pwd'];
		$row=$student->checkLogin();
		if($row){
			$_SESSION['stu_id']=$row['stu_id'];
			$_SESSION['stu_name']=$row['stu_name'];
			$_SESSION['stu_sex']=$row['stu_sex'];
			$_SESSION['stu_grade']=$row['stu_grade'];
			$_SESSION['stu_class']=$row['stu_class'];
			header("location:index.php?group=Home&module=Index&act=index");
		}else{
			header("location:index.php?group=Home&module=Index&act=login");
		}
	}
	public function delete_session(){
		//删除session
		unset($_SESSION['stu_id']);
		unset($_SESSION['stu_name']);
		unset($_SESSION['stu_sex']);
		header('location:index.php?group=Home&module=Index&act=index');
	}
}