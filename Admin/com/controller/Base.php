<?php 
namespace app\com\controller;
use app\com\controller\Accesscontrol;
use think\Session;
class Base extends Accesscontrol
{
	protected function _initialize(){
		// parent::initialize();
		define('USER_ID', session::get('user_info.user_id'));
	}
	protected function unlogin(){
		if(empty(USER_ID))
		{
			$this->error('用户未登录，无权访问',url('login/login/index'));
		}
	}
		protected function islogin(){
			if(!empty(USER_ID)){
				$this->success('用户以登陆,请勿重复登陆。',url('com/index/index'));
			}
		}
}


 ?>