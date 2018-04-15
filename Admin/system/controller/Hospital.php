<?php
namespace app\system\controller;
use app\com\controller\Accesscontrol;
use app\system\model\Hospital as HospitalModel;
use think\Request;
class Hospital extends Accesscontrol{
	public function index(){
		$list=HospitalModel::paginate(15);
		$count=HospitalModel::count();
		$this->assign('list',$list);
		$this->assign('count',$count);
		return $this->fetch();
	}
}