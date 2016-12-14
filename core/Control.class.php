<?php
class Control{
	protected $smarty;
	public function __construct(){
		global $group;
		global $module;
		$this->smarty=new Smarty();
		$this->smarty->left_delimiter="<{";
		$this->smarty->right_delimiter="}>";
		//模板路径
		$this->smarty->setTemplateDir("view/{$group}/{$module}");
	}
}