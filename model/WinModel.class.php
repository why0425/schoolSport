<?php
class WinModel extends Model{
	private $win_id;
	private $win_name;
	public function __set($n,$v){
		$this->$n=$v;
	}
	//获得所有名次
    public function selectAll(){
		$query="select * from win";
		$this->db->_query($query);
		$res=$this->db->getAll();
		return $res;
	}
}