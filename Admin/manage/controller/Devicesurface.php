<?php 
namespace app\manage\controller;
use app\com\controller\Accesscontrol;
use think\Request;
class Devicesurface extends Accesscontrol{
	public function index(){
		return $this->fetch();
	}
}