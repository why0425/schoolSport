<?php
class view{
	private $left='{*';
	private $right='*}';
	private $vars=array();
    public function assign($n,$v){
    	$this->vars[$n]=$v;
    }
    public function display($filename){
    	$str=file_get_contents($filename);
    	foreach ($this->vars as $k=>$v){
    		$str=str_replace($this->left.$k.$this->right,$v,$str);   		
    	}
    	echo $str;
    }
}
?>