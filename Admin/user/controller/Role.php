<?php
namespace app\user\controller;
use app\com\controller\Accesscontrol;
use think\Request;
use app\user\model\User as UserModel;
use app\user\model\Company;
use app\user\model\Role as RoleModel;
use think\Db;
class Role extends Accesscontrol{
	public function index(){
        $this->control(8);
		$list=RoleModel::all();
        $count=RoleModel::count();
        $this->assign('list',$list);
		$this->assign('count',$count);
		return $this->fetch();
	}
	//添加角色
		public function roleadd(){
        $this->control(9);
		return $this->fetch();
	}
	 public function rolesave(){
	 	$status=0;
	 	$request = Request::instance();
    	$data = $request->param();
    	$test=[
    	'name'=>$data['roleName'],
    	'bewrite'=>$data['memo'],
    	'role_status'=>$data['status']
    	];
        $role_id=RoleModel::where(['name'=>$data['roleName']])->value('role_id');
    	if(@$data['id']){
            if($role_id && $role_id!=@$data['id']){
                $message="角色已存在。";
                return ['message'=>$message,'status'=>$status];
            }
            $update=RoleModel::where('role_id',$data['id'])->update($test);
            $message=$update?"角色更新成功。":"系统错误，更新失败。";
            $status= $update?1:0;
            $this->addlog('修改角色：'.$data['roleName'].'，'.'结果：'.$message);
    }else{
         if($role_id){
            $message="角色已存在。";
             return ['message'=>$message,'status'=>$status];
            }
        $role=RoleModel::create($test);
        $message= $role?"角色添加成功。":"系统错误，添加失败。";
        $status= $role?1:0;
        $this->addlog('添加角色：'.$data['roleName'].'，'.'结果：'.$message);
    }   
     return ['message'=>$message,'status'=>$status];   
}
	 //停用启用
	 public function status(){
        $message=$this->control(10);
        if(empty($message)){
    	$request = Request::instance();
    	$id = $request->param('id');
        $list = UserModel::all(['roleid'=>$id]);
        if(!empty($list)){
            $message="该角色中还存在用户，请清空后再停用。";
            return ['message'=>$message];
        }
    	$user = RoleModel::get($id);
    	$status=($user->getData('role_status')===1)?0:1;
    	$rule=RoleModel::where(['role_id'=>$id])->update(['role_status'=>$status]);
    	$message=($rule===null)?"操作失败":"操作成功";
         $role=RoleModel::where('role_id',$id)->value('name');
        $info=($user->getData('role_status')===1)?'禁用':'启用';
        $this->addlog($info.'角色：'.$role.'，'.'结果：'.$message);
        }
    	return ['message'=>$message];
    }
    //删除
    public function roledel(){
         $message=$this->control(11);
         $status=0;
        if(empty($message)){
        $request = Request::instance();
        $id = $request->param('role_id');
        $list = UserModel::all(['roleid'=>$id]);
        if(!empty($list)){
            $message="该角色中还存在用户，请清空后再删除。";
            return ['message'=>$message,'status'=>$status];
        }
        $role=RoleModel::where('role_id',$id)->value('name');
        $del=RoleModel::destroy($id);
        $message=($del>0)?"角色删除成功。":"系统错误,用户删除失败。";
        $status=($del>0)?1:0;
        $this->addlog('删除角色：'.$role.'，结果：'.$message);
        }
        return ['message'=>$message,'status'=>$status];
    }
     public function deleterole(){
        $status=0;
        $message=$this->control(12);
        if(empty($message)){
        $request = Request::instance();
        $data=$request->param();
        $status=0;
        $role=0;
        for($i=0;$i<count($data,1)-1;$i++){
        $id=$data['delete'][$i];
        $list = UserModel::all(['roleid'=>$id]);
        if(!empty($list)){
            $message="角色中还存在用户，请清空后再删除。";
            return ['message'=>$message,'status'=>$status];
        }
        $rule=RoleModel::where('role_id',$id)->value('name');
        $role.=$rule."，";
        if(RoleModel::destroy($id)){
            $message="批量删除成功。";
         }else{
            $message="角色：".$rule."删除失败。导致批量删除中断";
            return ['message'=>$message,'status'=>$status];
         }
    }
     $status=1;
    $this->addlog('批量删除角色：'.$role.'，'.'结果：'.$message);
}
    return ['message'=>$message,'status'=>$status];
    }
    //角色编辑
    public function roleedit(){  
        $this->control(13);
    	$request = Request::instance();
    	$id = $request->param('role_id');
    	$list=RoleModel::get($id);
    	$this->assign('list',$list);
    	return $this->fetch();
    }

}
