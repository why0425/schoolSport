<?php
class ScoreControl extends Control{
	//为学生添加名次
	public function insert(){
		$score=new ScoreModel();
		$score->sco_stu_id=$_POST['stu_id'];
		$score->sco_grade_id=$_POST['grade_id'];
		$score->sco_class_id=$_POST['class_id'];
		$score->sco_pro_id=$_POST['pro_id'];
		$score->sco_pro_sex=$_POST['stu_sex'];
		$score->sco_score=$_POST['win_id']+1;
		$res=$score->insert();
		if($res){
			echo '1';
			//redirectURL('index.php?group=Admin&module=Enter&act=admin_person','添加成功','2');
		}else{
			echo '0';
			//redirectURL('index.php?group=Admin&module=Enter&act=admin_person','添加失败','2');
		}
	}
	//修改学生的名次
	public function update(){
	    $score=new ScoreModel();
		$score->sco_stu_id=$_POST['stu_id'];
		$score->sco_grade_id=$_POST['grade_id'];
		$score->sco_class_id=$_POST['class_id'];
		$score->sco_pro_id=$_POST['pro_id'];
		$score->sco_pro_sex=$_POST['stu_sex'];
		$score->sco_score=$_POST['win_id']+1;
		$res=$score->update();
		if($res){
			echo '1';
			//redirectURL('index.php?group=Admin&module=Enter&act=admin_person','添加成功','2');
		}else{
			echo '0';
			//redirectURL('index.php?group=Admin&module=Enter&act=admin_person','添加失败','2');
		}
	}
	
}