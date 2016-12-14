<?php
class Application{
	public static function run(){
		global $group;
		global $module;
		global $act;
		include ROOT."control/".$group."/".$module."Control.class.php";
		$class_name=$module."Control";
		$control=new $class_name();
		$control->$act();
	}
}