<?php
class ProjectModel extends Model{
	private $pro_id;
	private $pro_name;
	public function __set($n,$v){
		$this->$n=$v;
	}
	public function selectAll(){
		$query="select * from project";
		$this->db->_query($query);
	    $res=$this->db->getAll();
	    return $res;
	}
	//查询项目id
	public function getProId(){
		$query="select * from project";
		$res=mysql_query($query);
		$option2_id=array();
		while($row2=mysql_fetch_assoc($res)){
			$option2_id[]=$row2['pro_id'];
		}
		return $option2_id;
	}
	//查询项目name
	public function getProName(){
		$query="select * from project";
		$res=mysql_query($query);
		$option2_name=array();
		while($row2=mysql_fetch_assoc($res)){
			$option2_name[]=$row2['pro_name'];
		}
		return $option2_name;
	}
}