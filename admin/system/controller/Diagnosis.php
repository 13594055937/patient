<?php
namespace app\system\controller;
use app\com\controller\Accesscontrol;
use app\system\model\Diagnosis as DiagnosisModel;
use think\Request;
use think\Db;
class Diagnosis extends Accesscontrol{
	public function index()
	{
		$request=Request::instance();
		$difference=$request->param('difference');
		if($difference==0 || $difference==1){
			$list=DiagnosisModel::where('difference',$difference)->paginate(15);
			$count=DiagnosisModel::where('difference',$difference)->count();
		}
		else{
			$list=DiagnosisModel::paginate(15);
			$count=DiagnosisModel::count();
		}
		$this->assign('list',$list);
		$this->assign('difference',$difference);
		$this->assign('count',$count);
		return $this->fetch();
	}
	public function diagnosisadd()
	{
		$request=Request::instance();
		if($request->ispost()){
		$data=$request->param();
		$status='';
		if(DiagnosisModel::get(['diagnosis_name'=>$data['name'],'difference'=>$data['difference']])){
			$message="诊断名存在，请勿重复添加。";
			return ['message'=>$message,'status'=>$status];
		}
		$diagnosis=DiagnosisModel::create(['diagnosis_name'=>$data['name'],'difference'=>$data['difference']]);
		$message=$diagnosis?'添加成功。':'添加失败。';
		$status=$diagnosis?1:0;
		return ['message'=>$message,'status'=>$status];
		}
		return $this->fetch();
	}
	public function diagnosisedit()
	{
		$request=Request::instance();
		$data=$request->param();
		if($request->ispost()){
			$status='';
		if(DiagnosisModel::get(['diagnosis_name'=>$data['name'],'difference'=>$data['difference']])){
			$message="诊断名已存在，请勿重复添加。";
			return ['message'=>$message,'status'=>$status];
		}
		$diagnosis=DiagnosisModel::where('diagnosis_id',$data['id'])->update(['diagnosis_name'=>$data['name']]);
		$message=$diagnosis?'修改成功。':'修改失败。';
		$status=$diagnosis?1:0;
		return ['message'=>$message,'status'=>$status];
		}
		$list=DiagnosisModel::get($data['id']);
		$this->assign('list',$list);
		return $this->fetch();
	}
	public function diagnosisdel()
	{
		$request=Request::instance();
		$id=$request->param('id');
		$del=DiagnosisModel::destroy($id);
		$message=$del?'删除成功。':'删除失败。';
		return ['message'=>$message];
	} 
	public function diagnosisdelete()
	{
		$request = Request::instance();
        $data=$request->param();
        $message='';
        for($i=0;$i<count($data,1)-1;$i++){
        $id=$data['delete'][$i];
        if(!DiagnosisModel::destroy($id)){
        	$name=DiagnosisModel::where('diagnosis_id',$id)->value('diagnosis_name');
            $message='批量删除在【'.$name.'】中断。';
            return ["message"=>$message];
         	}
    	}
    return ["message"=>'批量删除成功。'];
	}
	public function diagnosissearch()
	{
		$request = Request::instance();
        $text=$request->param('text');
        $list=Db::table('diagnosis')->where("diagnosis_name like '%$text%'")->paginate(15);
        $count=Db::table('diagnosis')->where("diagnosis_name like '%$text%'")->count();
        $this->assign('list',$list);
		$this->assign('count',$count);
		return $this->fetch('index');
	}
}