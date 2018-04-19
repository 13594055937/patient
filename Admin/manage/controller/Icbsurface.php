<?php 
namespace app\manage\controller;
use app\com\controller\Accesscontrol;
use think\Request;
class Icbsurface extends Accesscontrol{
	public function index(){
		return $this->fetch();
	}
}