<?php
class GradeModel extends Model {
	private $grade_id;
	private $grade_name;
	public function __set($n,$v){
		$this->$n=$v;
	}
	//查询年级id
	public function getGradeId(){
		$query="select * from grade";
		$res=mysql_query($query);
		$option_id=array();
		while($row2=mysql_fetch_assoc($res)){
			$option_id[]=$row2['grade_id'];
		}
		return $option_id;
	}
	//查询班级id
	public function getGradeName(){
		$query="select * from grade";
		$res=mysql_query($query);
		$option2_name=array();
		while($row2=mysql_fetch_assoc($res)){
			$option2_name[]=$row2['grade_name'];
		}
		return $option2_name;
	}
	public function selectAll(){
		$query="select * from grade";
		$this->db->_query($query);
		$res=$this->db->getAll();
		return $res;
	}
}