<?php
namespace app\system\controller;
use app\com\controller\Accesscontrol;
use app\system\model\Other as OtherModel;
use think\Request;
use think\Db;
class Other extends Accesscontrol{
	public function index()
	{
		$list=OtherModel::paginate(15);
		$count=OtherModel::count();
		$this->assign('list',$list);
		$this->assign('count',$count);
		return $this->fetch();
	}
	public function otheradd()
	{
		$request=Request::instance();
		$data=$request->param('name');
		$status='';
		if(OtherModel::get(['other_name'=>$data])){
			$message="医院名存在，请勿重复添加。";
			return ['message'=>$message,'status'=>$status];
		}
		$other=OtherModel::create(['other_name'=>$data]);
		$message=$other?'添加成功。':'添加失败。';
		$status=$other?1:0;
		return ['message'=>$message,'status'=>$status];
	}
	public function otheredit()
	{
		$request=Request::instance();
		$data=$request->param();
		if(OtherModel::get(['other_name'=>$data['name']])){
			$message="医院名存在，请勿重复添加。";
			return ['message'=>$message,'status'=>$status];
		}
		$other=OtherModel::where('other_id',$data['id'])->update(['other_name'=>$data['name']]);
		$message=$other?'修改成功。':'修改失败。';
		$status=$other?1:0;
		return ['message'=>$message,'status'=>$status];
	}
	public function otherdel()
	{
		$request=Request::instance();
		$id=$request->param('id');
		$del=OtherModel::destroy($id);
		$message=$del?'删除成功。':'删除失败。';
		return ['message'=>$message];
	} 
	public function otherdelete()
	{
		$request = Request::instance();
        $data=$request->param();
        $message='';
        for($i=0;$i<count($data,1)-1;$i++){
        $id=$data['delete'][$i];
        if(!OtherModel::destroy($id)){
        	$name=OtherModel::where('other_id',$id)->value('other_name');
            $message='批量删除在【'.$name.'】中断。';
            return ["message"=>$message];
         	}
    	}
    return ["message"=>'批量删除成功。'];
	}
	public function othersearch()
	{
		$request = Request::instance();
        $text=$request->param('text');
        $list=Db::table('other')->where("other_name like '%$text%'")->paginate(15);
        $count=Db::table('other')->where("other_name like '%$text%'")->count();
        $this->assign('list',$list);
		$this->assign('count',$count);
		return $this->fetch('index');
	}
}