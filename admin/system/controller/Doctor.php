<?php
namespace app\system\controller;
use app\com\controller\Accesscontrol;
use app\system\model\Doctor as DoctorModel;
use think\Request;
use think\Db;
class Doctor extends Accesscontrol{
	public function index()
	{
		$list=DoctorModel::paginate(15);
		$count=DoctorModel::count();
		$this->assign('list',$list);
		$this->assign('count',$count);
		return $this->fetch();
	}
	public function doctoradd()
	{
		$request=Request::instance();
		$data=$request->param('name');
		$status='';
		if(DoctorModel::get(['doctor_name'=>$data])){
			$message="医院名存在，请勿重复添加。";
			return ['message'=>$message,'status'=>$status];
		}
		$doctor=DoctorModel::create(['doctor_name'=>$data]);
		$message=$doctor?'添加成功。':'添加失败。';
		$status=$doctor?1:0;
		return ['message'=>$message,'status'=>$status];
	}
	public function doctoredit()
	{
		$request=Request::instance();
		$data=$request->param();
		if(DoctorModel::get(['doctor_name'=>$data['name']])){
			$message="医院名存在，请勿重复添加。";
			return ['message'=>$message,'status'=>$status];
		}
		$doctor=DoctorModel::where('doctor_id',$data['id'])->update(['doctor_name'=>$data['name']]);
		$message=$doctor?'修改成功。':'修改失败。';
		$status=$doctor?1:0;
		return ['message'=>$message,'status'=>$status];
	}
	public function doctordel()
	{
		$request=Request::instance();
		$id=$request->param('id');
		$del=DoctorModel::destroy($id);
		$message=$del?'删除成功。':'删除失败。';
		return ['message'=>$message];
	} 
	public function doctordelete()
	{
		$request = Request::instance();
        $data=$request->param();
        $message='';
        for($i=0;$i<count($data,1)-1;$i++){
        $id=$data['delete'][$i];
        if(!DoctorModel::destroy($id)){
        	$name=DoctorModel::where('doctor_id',$id)->value('doctor_name');
            $message='批量删除在【'.$name.'】中断。';
            return ["message"=>$message];
         	}
    	}
    return ["message"=>'批量删除成功。'];
	}
	public function doctorsearch()
	{
		$request = Request::instance();
        $text=$request->param('text');
        $list=Db::table('doctor')->where("doctor_name like '%$text%'")->paginate(15);
        $count=Db::table('doctor')->where("doctor_name like '%$text%'")->count();
        $this->assign('list',$list);
		$this->assign('count',$count);
		return $this->fetch('index');
	}
}