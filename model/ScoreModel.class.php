<?php
class ScoreModel extends Model{
	private $sco_id;
	private $sco_stu_id;
	private $sco_grade_id;
	private $sco_class_id;
	private $sco_pro_id;
	private $sco_pro_sex;
	private $sco_score;
	public function __set($k,$v){
		$this->$k=$v;
	}
	public function SelectScore(){
	//通过名字查询报名情况
		$query="select s.*,t.*,g.*,c.*,p.*,w.* from score s left join student t on s.sco_stu_id=t.stu_id left join grade g
		        on s.sco_grade_id=g.grade_id left join class c on s.sco_class_id=c.class_id  left join project p on 
		        s.sco_pro_id=p.pro_id left join win w on s.sco_score=win_id where s.sco_stu_id= {$this->sco_stu_id} and s.sco_pro_id={$this->sco_pro_id}";
		$this->db->_query($query);//echo $query;
		$rows=$this->db->getRow();
		return $rows;
	}
	//添加名次
	public function insert(){
		$query="insert into score values(null,{$this->sco_stu_id},{$this->sco_grade_id},{$this->sco_class_id},
                {$this->sco_pro_id},'{$this->sco_pro_sex}',{$this->sco_score})";
        return $this->db->_query($query);
	}
	//修改名次
	public function update(){
		$query="update score set sco_stu_id={$this->sco_stu_id},sco_grade_id={$this->sco_grade_id},sco_class_id=
		        {$this->sco_class_id},sco_pro_id={$this->sco_pro_id},sco_pro_sex='{$this->sco_pro_id}',sco_score=
		        {$this->sco_score} where sco_stu_id={$this->sco_stu_id} and sco_pro_id={$this->sco_pro_id}";
		return $this->db->_query($query);		
	}
	
}