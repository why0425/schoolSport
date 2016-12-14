<?php
class ClassModel extends Model{
	private $class_id;
	private $class_name;
	public function __set($n,$v){
		$this->$n=$v;
	}
	//查询班级id
	public function getClassId(){
		$query="select * from class";
		$res=mysql_query($query);
		$option2_id=array();
		while($row2=mysql_fetch_assoc($res)){
			$option2_id[]=$row2['class_id'];
		}
		return $option2_id;
	}
	//查询班级name
	public function getClassName(){
		$query="select * from class";
		$res=mysql_query($query);
		$option2_name=array();
		while($row2=mysql_fetch_assoc($res)){
			$option2_name[]=$row2['class_name'];
		}
		return $option2_name;
	}
	public function selectAll(){
		$query="select * from class";
		$this->db->_query($query);
		$res=$this->db->getAll();
		return $res;
	}
}