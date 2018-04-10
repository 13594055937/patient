<?php 
namespace app\com\controller;
use app\com\controller\Base;
use think\Controller;
class Index extends Base{
	public function index(){
		$this->unlogin();
		return $this->fetch();
	}
}
?>