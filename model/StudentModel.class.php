<?php
class StudentModel extends Model{
	private $stu_id;
	private $stu_name;
	private $stu_xuehao;
	private $stu_pwd;
	private $stu_sex;
	private $stu_grade;
	private $stu_class;
	public function __set($n,$v){
		$this->$n=$v;
	}
	//学生注册
	public function insertStudent(){
		$query="insert into student values (null,'{$this->stu_name}','{$this->stu_xuehao}','{$this->stu_pwd}','{$this->stu_sex}',{$this->stu_grade},{$this->stu_class})";
		$res=$this->db->_query($query);
		return $res;
	}
	//判断是否存在某个学生
	public function checkStudent(){
		$query="select stu_name from student where stu_name='{$this->stu_name}'";
		$this->db->_query($query);
		$row=$this->db->getRow();
		return $row;
	}
	//判断用户是否合法
	public function checkLogin(){
		$query="select * from student where stu_name='{$this->stu_name}' and stu_pwd='{$this->stu_pwd}'";
		$this->db->_query($query);
		$row=$this->db->getRow();
		return $row;
	}
}







