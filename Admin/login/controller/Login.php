<?php
namespace app\login\controller;
use think\Controller;
use think\Request;
use think\Validate;
use app\com\controller\Base;
use app\user\model\User;
use app\user\model\Role;
use think\Session;
class Login extends Base
{
    public function index()
    {
        $this->islogin();
    	return $this->fetch();
    }
    public function loginvalidate(){
        $request=Request::instance();
        $data=$request->param();
        $status=0;
        $rules=[
            'name' => 'require',
            'password' => 'require',
        ];
        $msg=[
            'name'=>['require'=>'账号不能为空，请输入账号。'],
            'password'=>['require'=>'密码不能为空，请输入密码'],
        ];
        $message=$this->validate($data,$rules,$msg);
        if($message===true){
            $password=md5($data['name'].$data['password']."~!@");
            $test=[
                'usercode'=>$data['name'],
                'userpwd'=>$password,
                 'status'=>1,
            ];
            $user=User::get($test);
            if($user){
                Session::set('user_info', $user->getData());
                $role_info=Role::get($user->roleid);
                Session::set('role_info',$role_info);
                User::where('usercode',$data['name'])->update(['latestLogin'=> strtotime('now')]);
                $message="登陆成功。";
                $status=1;
            }else{
                $message="登陆失败，账号或密码错误。";
            }
        }
        // exit(json_encode(array('status'=>$status,'msg'=>$result)));
        return ['message'=>$message,'status'=>$status];
    }
    public function outlogin(){
        Session::delete('user_info');
        $this->success('正在注销用户，请稍后。',url('login/login/index'));
    }
}
