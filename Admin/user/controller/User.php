<?php
namespace app\user\controller;
use app\com\controller\Accesscontrol;
use think\Controller;
use think\Request;
use app\user\model\User as UserModel;
use app\company\model\Company;
use app\user\model\Role;
use think\Db;
use think\Loader;
class User extends Accesscontrol{
	// 用户列表
    public function index(){
        $this->control(3);
        $list=Db::table('user')->alias('a')
        ->join('role w','a.roleid = w.role_id')
        ->paginate(5);
        $count=UserModel::count();
        $this->assign("list",$list);
        $this->assign("count",$count);
        return $this->fetch();
    }
    // 启用/停用
    public function status(){
        $message=$this->control(2);
        if(empty($message)){
    	$request = Request::instance();
    	$id = $request->param('user_id');
        $status=UserModel::where('user_id',$id)->value('status');
    	$status=($status==1)?0:1;
    	$rule=UserModel::where(['user_id'=>$id])->update(['status'=>$status]);
    	$user=UserModel::where('user_id',$id)->value('usercode');
        $info=($status==0)?'禁用':'启用';
        $this->addlog($info.$user);
        $message=($rule===null)?"操作失败":"操作成功";
        }
    	return ['message'=>$message];
    }
    //添加
    public function adduser(){
       $this->control(4);
        $role=Role::all();
        $this->assign('role',$role);
    	return $this->fetch();
    }
    public function usersave(){
        $request=Request::instance();
        $data=$request->param();
        $status='';
        $rules=[

            'usercode'=>'require|length:2,17',
            'username'=>'require|length:2,12',
            'password'=>'require|length:6,17|regex:/^[a-zA-Z0-9_.@~!?]{6,17}$/',
            'email'=>'email',
            'usertype'=>'require'
        ];
        $msg=[
            'usercode'=>['require'=>'用户名不能为空，请输入用户名。','length'=>'请输入编号长度为2-17的字符'],
            'username'=>['require'=>'姓名不能为空，请输入用户名。','length'=>'请输入编号长度为2-12的字符'],
            'password'=>['require'=>'密码不能为空，请输入用密码。','length'=>'请输入密码长度为6-17的字符','regex'=>'密码不符合规则。'],
            'email'=>['email'=>'请输入正确的邮箱格式。'],
            'usertype'=>['require'=>'请选择用户类型']
        ];
        $message=$this->validate($data,$rules,$msg);
        if($message===true){
             if(UserModel::get(['usercode'=>$data['usercode']])){
                $message="用户名已存在。";
                $this->addlog('添加用户：'.$data['usercode'].','.'结果：'.$message);
                return ['message'=>$message,'status'=>$status];
            }
            $test=[
        'usercode'=>$data['usercode'],
        'username'=>$data['username'],
        'userpwd'=>$data['password'],
        'email'=>$data['email'],
        'roleid'=>$data['usertype'],
        'status'=>$data['status'],
        'latestLogin'=>strtotime('now'),
        ];
        $test['userpwd']=md5($data['usercode'].$data['password']."~!@");
        $user=UserModel::create($test);
        $message=$user?"用户添加成功。":"系统错误，添加失败。";
        $status=$user?1:0;
        $this->addlog('添加用户：'.$data['usercode'].','.'结果：'.$message);
}
        return ['message'=>$message,'status'=>$status];
    }
    //编辑用户
    public function useredit(){
        $this->control(1);
        $request = Request::instance();
        if($request->ispost()){
            $data=$request->param();
            $status='';
        $rules=[
            'usercode'=>'require|length:2,17',
            'username'=>'require|length:2,12',
            'email'=>'email',
            'usertype'=>'require'
        ];
        $msg=[
            'usercode'=>['require'=>'用户名不能为空，请输入用户名。','length'=>'请输入编号长度为2-17的字符'],
            'username'=>['require'=>'姓名不能为空，请输入用户名。','length'=>'请输入编号长度为2-12的字符'],
            'email'=>['email'=>'请输入正确的邮箱格式。'],
            'usertype'=>['require'=>'请选择用户类型']
        ];
        $message=$this->validate($data,$rules,$msg);
        if($message===true){
            $code=UserModel::where(['usercode'=>$data['usercode']])->value('user_id');
             if($code && $code!=$data['id']){
                $message="用户名已存在。";
                $this->addlog('修改用户：'.$data['usercode'].','.'结果：'.$message);
                return ['message'=>$message,'status'=>$status];
            }
             $test=[
        'usercode'=>$data['usercode'],
        'username'=>$data['username'],
        'email'=>$data['email'],
        'roleid'=>$data['usertype']
        ];
        $updata=UserModel::where('user_id',$data['id'])->update($test);
        $message=$updata?"用户更新成功。":"系统错误，添加失败。"; 
        $this->addlog('修改用户：'.$data['usercode'].','.'结果：'.$message);
        $status=$updata?1:0;
    }
        return ['message'=>$message,'status'=>$status];
        }
        $id = $request->param('id');
        $list=UserModel::get($id);
        $role=Role::all();
        $this->assign('role',$role);
        $this->assign('list',$list);
        return $this->fetch();
    }
    //删除用户
    public function userdel(){
        $message=$this->control(5);
        if(empty($message)){
        $request = Request::instance();
        $id = $request->param('id');
        $user=UserModel::where('user_id',$id)->value('usercode');
        $del=UserModel::destroy($id);
        $message=($del>0)?"用户删除成功。":"系统错误,用户删除失败。";
         $this->addlog('删除用户：'.$user.'，'.'结果：'.$message);
    }
        return ['message'=>$message];
    }

    public function deleteuser(){
        $message=$this->control(6);
        if(empty($message)){
        $request = Request::instance();
        $data=$request->param();
        $message='';
        for($i=0;$i<count($data,1)-1;$i++){
        $id=$data['delete'][$i];
        if(UserModel::destroy($id)){
            $message="批量删除成功。";
         }
    }
     $this->addlog('批量删除用户,结果：'.$message);
}
    return ["message"=>$message];
    }
    //搜索用户
    public function searchuser(){
        $this->control(7);
        $request = Request::instance();
        $value = $request->param('value');
      $retuls=Db::table('user')->alias('a')
      ->join('role w','a.roleid = w.role_id')
      ->where("usercode like '%$value%' or username like '%$value%'")
      ->paginate(10);
        $count = Db::table('user')->where("usercode like '%$value%' or username like '%$value%'")->count();
        $this->addlog('搜索用户关键信息：'.$value);
        $this->assign('list',$retuls);
         $this->assign('count',$count);
        return $this->fetch('index');
    }
    //密码修改
    public function changepassword(){
        $this->control(15);
        $request = Request::instance();
        if($request->ispost()){
            $status=0;
            $data=$request->param();
            if($data['pwd']!==md5($data['usercode'].$data['password']."~!@")){
                $message="旧密码错误。";
                 $this->addlog('修改用户：'.$data['usercode'].'密码，'.'结果：'.$message);
            }else{
                $newpassword=md5($data['usercode'].$data['newpassword1']."~!@");
                $update=UserModel::where('user_id',$data['id'])->update(['userpwd'=>$newpassword]);
                $message=$update?'更改密码成功':'更改密码失败';
                $status=$update?1:0;
                $this->addlog('修改用户：'.$data['usercode'].'密码，'.'结果：'.$message);
            }
            return ['message'=>$message,'status'=>$status];
        }
        $id = $request->param('id');
        $list = UserModel::get($id);
        $this->assign('list',$list);
        return $this->fetch();
    }
    public function exceladd(){
        $request=Request::instance();
        if($request->ispost()){
            //获取表单上传文件
            $file = request()->file('file-2');
            //上传验证后缀名,以及上传之后移动的地址
            $info = $file->validate(['ext' => 'xlsx'])->move(ROOT_PATH . 'public' . DS . 'uploads');
            if ($info) {
                $exclePath = $info->getSaveName();  //获取文件名
                $file_name = ROOT_PATH . 'public' . DS . 'uploads' . DS . $exclePath;   //上传文件的地址
                $data=$this->importExecl($file_name);
                if(!empty($data)){
                    $status=0;
                    $message="excel导入用户成功";
                    foreach ($data as $key => $value){
                         $test=[
                         'usercode'=>$value['A'],
                         'username'=>$value['B'],
                         'userpwd'=>md5($value['B'].$value['C']."~!@"),
                         'mobile'=>$value['D'],
                         'openid'=>$value['E'],
                         'email'=>$value['F'],
                         'status'=>1,
                         'latestLogin'=>strtotime('now'),
                         ];
                         $role=Role::get(['name'=>$value['G']]);
                         $test['roleid']=$role->getData('role_id');
                         $company=Company::get(['company_name'=>$value['H']]);
                         $test['company_id']=$company->getData('id');
                         $user=UserModel::create($test);
                         if(!$user){
                            $message="格式有误,请按照标准格式输入。";
                            return ['message'=>$message,'status'=>$status];
                         }
                    }
                    $status=1;
                    return ['message'=>$message,'status'=>$status];
                }
            }
        }
            return $this->fetch();
    }
    public function excelexport(){
        // $data=Db::table('user')->field('usercode,username,mobile,openid,email,name,company')
        // ->alias('a')->join('role w','a.roleid = w.role_id')->paginate(10);
        // $title=array('用户编号','用户名','手机号','微信号','邮箱','角色名','所属公司');
        // $fileName='用户信息表';
        // $rule=$this->exportExcel($title,$data,$fileName,$savePath='./');
        // if(empty($rule)){
        //     $rule="导出失败。";
        // }
        // return ['message'=>$rule];
        return $this->fetch();
    }
}