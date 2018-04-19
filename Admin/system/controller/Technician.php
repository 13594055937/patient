<?php
namespace app\system\controller;
use app\com\controller\Accesscontrol;
use app\system\model\Technician as TechnicianModel;
use think\Request;
use think\Db;
class Technician extends Accesscontrol{
	public function index()
	{
		$list=TechnicianModel::paginate(15);
		$count=TechnicianModel::count();
		$this->assign('list',$list);
		$this->assign('count',$count);
		return $this->fetch();
	}
	public function technicianadd()
	{
		$request=Request::instance();
		$data=$request->param('name');
		$status='';
		if(TechnicianModel::get(['technician_name'=>$data])){
			$message="医院名存在，请勿重复添加。";
			return ['message'=>$message,'status'=>$status];
		}
		$technician=TechnicianModel::create(['technician_name'=>$data]);
		$message=$technician?'添加成功。':'添加失败。';
		$status=$technician?1:0;
		return ['message'=>$message,'status'=>$status];
	}
	public function technicianedit()
	{
		$request=Request::instance();
		$data=$request->param();
		if(TechnicianModel::get(['technician_name'=>$data['name']])){
			$message="医院名存在，请勿重复添加。";
			return ['message'=>$message,'status'=>$status];
		}
		$technician=TechnicianModel::where('technician_id',$data['id'])->update(['technician_name'=>$data['name']]);
		$message=$technician?'修改成功。':'修改失败。';
		$status=$technician?1:0;
		return ['message'=>$message,'status'=>$status];
	}
	public function techniciandel()
	{
		$request=Request::instance();
		$id=$request->param('id');
		$del=TechnicianModel::destroy($id);
		$message=$del?'删除成功。':'删除失败。';
		return ['message'=>$message];
	} 
	public function techniciandelete()
	{
		$request = Request::instance();
        $data=$request->param();
        $message='';
        for($i=0;$i<count($data,1)-1;$i++){
        $id=$data['delete'][$i];
        if(!TechnicianModel::destroy($id)){
        	$name=TechnicianModel::where('technician_id',$id)->value('technician_name');
            $message='批量删除在【'.$name.'】中断。';
            return ["message"=>$message];
         	}
    	}
    return ["message"=>'批量删除成功。'];
	}
	public function techniciansearch()
	{
		$request = Request::instance();
        $text=$request->param('text');
        $list=Db::table('technician')->where("technician_name like '%$text%'")->paginate(15);
        $count=Db::table('technician')->where("technician_name like '%$text%'")->count();
        $this->assign('list',$list);
		$this->assign('count',$count);
		return $this->fetch('index');
	}
}