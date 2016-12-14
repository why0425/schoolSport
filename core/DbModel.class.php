<?php
class DbModel{
	private $_result;
	public function __construct(){
		$this->connect();
	}
	public function connect(){
	    
	    $db=$GLOBALS['config']['DB'];
	   
		mysql_connect($db['host'],$db['user'],$db['pwd']);
		mysql_set_charset($db['charset']);
		mysql_select_db($db['db']);
	} 
	public function getAll(){
		$rows=array();
		 while($row=mysql_fetch_assoc($this->_result)){
		 	$rows[]=$row;
		 }
		 return $rows;
	}
	public function _query($sql){
		$res=mysql_query($sql);
		$this->_result=$res;
		if($res){
			return true;
		}else{
			return false;
		}
		
	}
	public function getRow(){
		
		return mysql_fetch_assoc($this->_result);
	}
}


?>
