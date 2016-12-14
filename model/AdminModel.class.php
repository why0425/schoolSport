<?php
class AdminModel extends Model{
	private $adm_id;
	private $adm_name;
	private $adm_pwd;
	private $adm_sex;
	public function __set($n,$v){
		$this->$n=$v;
	}
	public function check_admin(){
		$query="select * from admin where adm_name='{$this->adm_name}' and adm_pwd='{$this->adm_pwd}'";
		$this->db->_query($query);
		$row=$this->db->getRow();
		return $row;
	}
}