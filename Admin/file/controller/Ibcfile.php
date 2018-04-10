<?php
namespace app\file\controller;
use app\com\controller\Accesscontrol;
use think\Request;
class Ibcfile extends Accesscontrol{
	public function index()
	{
		return $this->fetch();
	}
	public function ibcfileadd()
	{
		$request=Request::instance();
		$file = request()->file('file');
		if($file){
			// $pash='uploads/'.date('Y').'年数据/'.date('m').'月用户数据/'.date('m').'.'.date('d');
			$pash='uploads/'.date('Y').'/'.date('m').'/'.date('d');
			// 移动到服务器的上传目录 并且设置不覆盖
			$info = $file->move(ROOT_PATH . 'public' . DS . $pash,'');
			// 移动到框架应用根目录/public/uploads/ 目录下
			// $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads/'.);
			if($info){ // 成功上传后 获取上传信息
            // 输出 jpg
            // $message = $info->getExtension();
            // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
            // $message = $info->getSaveName();
            $message = iconv("GB2312","UTF-8",  $info->getSaveName());
            // 输出 42a79759f284b767dfcb2a0197904287.jpg
            // $message = $info->getFilename(); 
        	}else{
            // 上传失败获取错误信息
            $message = $file->getError();
       		 }
       		 return ['message'=>$message];
    	}
		return $this->fetch();
	}

}