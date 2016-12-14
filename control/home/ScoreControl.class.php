<?php
class ScoreControl extends Control{
//查看成绩
	public function SelectScore(){
		$score=new ScoreModel();
		$score->sco_stu_id=$_SESSION['stu_id'];
		$score->sco_pro_id=$_GET['pro_id'];
		$res=$score->SelectScore();
		if($res){
			$stu_name=$_SESSION['stu_name'];
			$this->smarty->assign('stu_name',$stu_name);
			$this->smarty->assign('res',$res);
			$this->smarty->display('score.html');
		}else{
			redirectURL('index.php?group=Home&module=Student&act=center','对不起，您的成绩未更新，请稍后查看','2');
		}
	}
}