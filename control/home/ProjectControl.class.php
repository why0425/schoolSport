<?php
class ProjectControl extends Control{
	//学生报名
	public function join(){
		$pro_id=$_GET['pro_id'];
		$stu_id=isset($_SESSION['stu_id'])?$_SESSION['stu_id']:'';
		//学生必须登录才能报名
		if($stu_id){
			//登录
			$enter=new EnterModel();
			$enter->ent_stu_id=$stu_id;
			$enter->ent_pro_id=$pro_id;
			$enter->ent_pro_sex=$_SESSION['stu_sex'];
			$enter->ent_grade_id=$_SESSION['stu_grade'];
			$enter->ent_class_id=$_SESSION['stu_class'];
			//$rows=$enter->selectJoin();
			//判断自己是否报过该个项目  如果报了，则不能报
			$rows=$enter->selectStudent();
			if(!$rows){
				//判断本班学生是否超过两个报过该个项目
				$res=$enter->selectCount();
				if($res==true){			
					//如果符合同一性别、同一班级、同一项目  ===>可以报名
					//项目表   用户表   
					//可以报名
					//查询是否同一性别、同一班级、同一项目
					if($enter->selectJoin()){
						if($enter->insertEnter()){
							//报名成功
							redirectURL('index.php?group=Home&module=Student&act=center','报名成功','2');
						}else{
							//报名失败
							redirectURL('index.php?group=Home&module=Index&act=index','本班学生已有两人报过该项目','2');
						} 
					}else{
						redirectURL('index.php?group=Home&module=Index&act=index','对不起，本班已有两人报了该项目','2');
					}
				}else{
					//已经报名
					redirectURL('index.php?group=Home&module=Index&act=index','对不起，每班每人最多能报两项','2');
				}
			}else{
				//不符合 ，不能报名   已经报过该项目
				redirectURL('index.php?group=Home&module=Index&act=index','你已经报过该项目','2');
			}
		}else{
			//未登录，直接跳转到登录页面
			redirectURL('index.php?group=Home&module=Index&act=login','请登录，才能报名','2');
		}
	}
}