<?php
class StudentControl extends Control{
	public function insert(){
		//在模板显示年级下拉框
		$grade=new GradeModel();
		$grade_id=$grade->getGradeId();
		$grade_name=$grade->getGradeName();
		$this->smarty->assign('option1_id',$grade_id);
		$this->smarty->assign('option1_name',$grade_name);
		//在模板显示班级下拉框
		$class=new ClassModel();
		$class_id=$class->getClassId();
		$class_name=$class->getClassName();
		$this->smarty->assign('option2_id',$class_id);
		$this->smarty->assign('option2_name',$class_name);
		
		$this->smarty->display('register.html');
	}
	public function insertStudent(){
		$student=new StudentModel();
		$student->stu_name=$_POST['stu_name'];
		$student->stu_xuehao=$_POST['stu_xuehao'];
		$student->stu_pwd=$_POST['stu_pwd'];
		$student->stu_sex=$_POST['stu_sex'];
		$student->stu_grade=$_POST['stu_grade'];
		$student->stu_class=$_POST['stu_class'];
		$res=$student->insertStudent();
		if($res){
			header("location:index.php?group=Home&module=Index&act=login");
		}else{
			header("location:index.php?group=Home&module=Student&act=insert");
		}
	}
	public function checkStudent(){
		$a=$_GET['stu_name'];
		$student=new StudentModel();
		$student->stu_name=$a;
		$res=$student->checkStudent();
		if($res){
			echo 0;
		}else{
			echo 1;
		}
	}
	//个人中心
	public function center(){
		$stu_id=$_SESSION['stu_id'];
		$stu_name=$_SESSION['stu_name'];
		$stu_sex=$_SESSION['stu_sex'];
		$stu_grade=$_SESSION['stu_grade'];
		$stu_class=$_SESSION['stu_class'];
		$this->smarty->assign('stu_name',$stu_name);
		$enter=new EnterModel();
		$info=$enter->getName($stu_name);
		$this->smarty->assign('rows',$info);
		$this->smarty->display('enterCenter.html');
	}
}