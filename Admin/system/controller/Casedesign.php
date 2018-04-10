<?php
namespace app\system\controller;
use app\com\controller\Accesscontrol;
use app\system\model\Casedesign as CasedesignModel;
use think\Request;
use think\Db;
class Casedesign extends Accesscontrol{
	public function info()
	{
		$request=Request::instance();
		if($request->ispost()){
			$text=$request->param('text');
			// $result=CasedesignModel::create(['content'=>$text]);
			$result=CasedesignModel::where('case_id',2)->update(['content'=>$text]);
			$message=$result?"保存成功。":"保存失败。";
			return ['message'=>$message];
		}
		$list=CasedesignModel::get(2);
		$this->assign('list',$list);
		return $this->fetch();
	}
	public function data()
	{
		$request=Request::instance();
		if($request->ispost()){
			$text=$request->param('text');
			// $result=CasedesignModel::create(['content'=>$text]);
			$result=CasedesignModel::where('case_id',3)->update(['content'=>$text]);
			$message=$result?"保存成功。":"保存失败。";
			return ['message'=>$message];
		}
		$list=CasedesignModel::get(3);
		$this->assign('list',$list);
		return $this->fetch();
	}

}