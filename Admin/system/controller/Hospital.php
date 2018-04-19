<?php
namespace app\system\controller;
use app\com\controller\Accesscontrol;
use app\system\model\Hospital as HospitalModel;
use think\Request;
use think\Db;
class Hospital extends Accesscontrol{
	public function index()
	{
		$list=HospitalModel::paginate(15);
		$count=HospitalModel::count();
		$this->assign('list',$list);
		$this->assign('count',$count);
		return $this->fetch();
	}
	public function hospitaladd()
	{
		$request=Request::instance();
		$data=$request->param('name');
		$status='';
		if(HospitalModel::get(['hospital_name'=>$data])){
			$message="医院名存在，请勿重复添加。";
			return ['message'=>$message,'status'=>$status];
		}
		$hospital=HospitalModel::create(['hospital_name'=>$data]);
		$message=$hospital?'添加成功。':'添加失败。';
		$status=$hospital?1:0;
		return ['message'=>$message,'status'=>$status];
	}
	public function hospitaledit()
	{
		$request=Request::instance();
		$data=$request->param();
		if(HospitalModel::get(['hospital_name'=>$data['name']])){
			$message="医院名存在，请勿重复添加。";
			return ['message'=>$message,'status'=>$status];
		}
		$hospital=HospitalModel::where('hospital_id',$data['id'])->update(['hospital_name'=>$data['name']]);
		$message=$hospital?'修改成功。':'修改失败。';
		$status=$hospital?1:0;
		return ['message'=>$message,'status'=>$status];
	}
	public function hospitaldel()
	{
		$request=Request::instance();
		$id=$request->param('id');
		$del=HospitalModel::destroy($id);
		$message=$del?'删除成功。':'删除失败。';
		return ['message'=>$message];
	} 
	public function hospitaldelete()
	{
		$request = Request::instance();
        $data=$request->param();
        $message='';
        for($i=0;$i<count($data,1)-1;$i++){
        $id=$data['delete'][$i];
        if(!HospitalModel::destroy($id)){
        	$name=HospitalModel::where('hospital_id',$id)->value('hospital_name');
            $message='批量删除在【'.$name.'】中断。';
            return ["message"=>$message];
         	}
    	}
    return ["message"=>'批量删除成功。'];
	}
	public function hospitalsearch()
	{
		$request = Request::instance();
        $text=$request->param('text');
        $list=Db::table('hospital')->where("hospital_name like '%$text%'")->paginate(15);
        $count=Db::table('hospital')->where("hospital_name like '%$text%'")->count();
        $this->assign('list',$list);
		$this->assign('count',$count);
		return $this->fetch('index');
	}
}