<?php 
namespace app\score\controller;
use app\com\controller\Accesscontrol;
use think\Request;
use app\score\model\metapedes as MetapedesModel;
class Score extends Accesscontrol{
	// 后足
	public function metapedes()
	{
		$list=MetapedesModel::paginate(15);
		$count=MetapedesModel::count();
		$this->assign('list',$list);
		$this->assign('count',$count);
		return $this->fetch();
	}
	public function metapedesadd()
	{
		$request=Request::instance();
		if($request->ispost()){
			$staus='';
			try {
			$data=$request->param();
			$test=[
			'pain'=>$data['pain'],
			'auxiliary'=>$data['auxiliary'],
			'distance'=>$data['distance'],
			'pavement'=>$data['pavement'],
			'gait'=>$data['gait'],
			'sagittal'=>$data['Sagittal'],
			'foot'=>$data['foot'],
			'stability'=>$data['stability'],
			'line_of_force'=>$data['Line_of_force']
			];
				$metapedes=MetapedesModel::create($test);
				$message=$metapedes?'保存成功。':'保存失败。';
				$status=$metapedes?1:0;
			} catch( \Exception $e){
				return ['message'=>$e->getMessage(),'status'=>$status];
			}
			return ['message'=>$message,'status'=>$status];
		}
		return $this->fetch();
	}
	// 前足
	public function propodeumadd()
	{
		return $this->fetch();
	}
	// 中足
	public function midlegadd()
	{
		return $this->fetch();
	}


}
