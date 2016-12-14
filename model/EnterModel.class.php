<?php
class EnterModel extends Model{
	private $ent_id;
	private $ent_stu_id;
	private $ent_grade_id;
	private $ent_class_id;
	private $ent_pro_id;
	private $ent_pro_sex;//性别组
	private $ent_add_time;
	public function __set($n,$v){
		$this->$n=$v;
	}
	//查询同一性别组、同一班级、同一项目
	public function selectJoin(){
		$query="select COUNT(*) as c from enter where  ent_pro_sex='{$this->ent_pro_sex}' and ent_grade_id
		={$this->ent_grade_id} and ent_class_id={$this->ent_class_id} and ent_pro_id={$this->ent_pro_id}";
		$this->db->_query($query);
		$rows=$this->db->getrow();
		if($rows['c']<2){
			return true;
		}else{
			return false;
		}
	}
	//查询学生是否报名过该项目
	public function selectStudent(){
		$query="select ent_stu_id from enter where ent_pro_id={$this->ent_pro_id} and ent_stu_id={$this->ent_stu_id}";
		$this->db->_query($query);
		return $this->db->getRow();
	}
	//查询本班学生是否超过两个报该项目selectCount()
	public function selectCount(){			
		$query="select COUNT(ent_stu_id={$this->ent_stu_id}) as c,COUNT(ent_pro_sex=
		       '{$this->ent_pro_sex}' and ent_grade_id={$this->ent_grade_id}
		      and ent_class_id={$this->ent_class_id} and ent_pro_id={$this->ent_pro_id}) as
		      s from enter where ent_stu_id={$this->ent_stu_id} and ent_pro_sex='{$this->ent_pro_sex}'
		      and ent_grade_id={$this->ent_grade_id} and ent_class_id={$this->ent_class_id} and 
		      ent_pro_id<>{$this->ent_pro_id}";
		$this->db->_query($query);//echo $query;die;
		$row=$this->db->getRow();
		$row1=$row['c'];
		$row2=$row['s'];
		if($row1<2 and $row2<2){
			return true;
		}else{
			return false;
		}
	}
	//开始报名
	public function insertEnter(){
		$time=time();
		$time=date("Y-m-d",$time);
		$query="insert into enter values(null,{$this->ent_stu_id},{$this->ent_grade_id},{$this->ent_class_id},
                {$this->ent_pro_id},'{$this->ent_pro_sex}','{$time}')";
        return $this->db->_query($query);
        
	}
	//(select count(*) from enter where ent_class_id={$this->ent_class_id})
	//通过名字查询报名情况
	public function getName($stu_name){
		$query="select s.*,e.*,g.*,c.*,p.* from student s left join enter e on s.stu_id=e.ent_stu_id left join grade 
				g on s.stu_grade=g.grade_id left join class c on s.stu_class=c.class_id left join project p on 
				e.ent_pro_id=p.pro_id where s.stu_name='{$stu_name}'";
		$this->db->_query($query);
		$rows=$this->db->getAll();
		return $rows;
	}
	//通过性别查询报名情况
	public function getSex($stu_sex){
		$query="select s.*,e.*,g.*,c.*,p.* from student s left join enter e on s.stu_id=e.ent_stu_id left join grade
		g on s.stu_grade=g.grade_id left join class c on s.stu_class=c.class_id left join project p on
		e.ent_pro_id=p.pro_id where s.stu_sex='{$stu_sex}'";
		$this->db->_query($query);
		$rows=$this->db->getAll();
		return $rows;
	}
	//通过项目查询报名情况
	public function getProject($pro_id){
		$query="select e.*,s.*,g.*,c.*,p.* from enter e left join student s on e.ent_stu_id=s.stu_id left join grade g
		on e.ent_grade_id=g.grade_id left join class c on e.ent_class_id=c.class_id left join project p on
		e.ent_pro_id=p.pro_id where e.ent_pro_id='{$pro_id}'";
		$this->db->_query($query);
		$rows=$this->db->getAll();
		return $rows;
	}
	//通过报名时间
	public function getGrade($time){
		$query="select e.*,s.*,g.*,c.*,p.* from enter e left join student s on e.ent_stu_id=s.stu_id left join grade g
		on e.ent_grade_id=g.grade_id left join class c on e.ent_class_id=c.class_id left join project p on
		e.ent_pro_id=p.pro_id where e.ent_grade_id={$time}";
		$this->db->_query($query);
		$rows=$this->db->getAll();
		return $rows;
	}
	//通过年级
	public function getClass($class_id){
		$query="select e.*,s.*,g.*,c.*,p.* from enter e left join student s on e.ent_stu_id=s.stu_id left join grade g
		on e.ent_grade_id=g.grade_id left join class c on e.ent_class_id=c.class_id left join project p on
		e.ent_pro_id=p.pro_id where e.ent_class_id={$class_id}";
		$this->db->_query($query);
		$rows=$this->db->getAll();
		return $rows;
	}
	//取消报名
	public function deleteEnter(){
		$query="delete from enter where ent_stu_id={$this->ent_stu_id} and ent_pro_id={$this->ent_pro_id}";
		return $this->db->_query($query);
	}
	//通过项目id和学生id查询详情
	//通过项目查询报名情况
	public function getInfo(){
		$query="select e.*,s.*,g.*,c.*,p.*,f.*,w.* from enter e left join student s on e.ent_stu_id=s.stu_id left join grade g
		on e.ent_grade_id=g.grade_id left join class c on e.ent_class_id=c.class_id left join project p on
		e.ent_pro_id=p.pro_id left join score f on e.ent_stu_id=f.sco_stu_id and e.ent_pro_id=f.sco_pro_id
		left join win w on f.sco_score=w.win_id where e.ent_stu_id={$this->ent_stu_id} and e.ent_pro_id={$this->ent_pro_id}";
		$this->db->_query($query);
		$rows=$this->db->getRow();
		return $rows;
	}
	
}