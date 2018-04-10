<?php 
namespace app\patient\controller;
use app\com\controller\Accesscontrol;
use app\system\model\Casedesign as Casedesign;
use app\com\model\Province;
use app\patient\model\Pash;
use app\patient\model\Customer;
use think\Request;
use think\Session;
use think\Db;
class Patient extends Accesscontrol{
	public $com;
	//客户信息
	public function info()
	{
		// $list=Casedesign::get(2);
		$list=Customer::paginate('15');
		$count=Customer::count();
		$this->assign('list',$list);
		$this->assign('count',$count);
		return $this->fetch();
	}
	//文件上传
	public function info_file()
	{
		$request=Request::instance();
		$file = request()->file('file');
		if($file){
			$pash='uploads/'.date('Y').'/'.date('m').'/'.date('d').'/'.strtotime('now');
			// 移动到服务器的上传目录 并且设置不覆盖
			$info = $file->move(ROOT_PATH . 'public' . DS . $pash,'');
			$message=$info?'上传成功。':$file->getError();
			$file_name=iconv("GB2312","UTF-8",  $info->getSaveName());
		}
		return ['message'=>$message,'name'=>$file_name,'pash'=>$pash];
	}
	// 客户信息添加
	public function infoadd()
	{
		$request=Request::instance();
		if($request->ispost()){
			$data=$request->param();
			$test_pash=[
				'pash'=>$data['pash'],
			];
			$pash=Pash::create($test_pash);
			$test=[
			'customer_name'=>$data['customer_name'],
            'province'=>$data['province'],
            'city'=>$data['city'],
            'area'=>$data['area'],
            'time'=>$data['time'], 
            'weight'=>$data['weight'], 
            'result'=>$data['result'], 
            'tel'=>$data['tel'],
            'nex'=>$data['nex'],
            'file_id'=>$pash->pash_id
			];
			$customer=Customer::create($test);


			if($pash && $customer){
				$message="成功。";
			}
			return ['message'=>$message];
		}
		$province=Province::all();
		$this->assign('province',$province);
		return $this->fetch();
	}
	// 客户信息修改
	public function infoedit()
	{
		$request=Request::instance();
		if($request->ispost()){
			$data=$request->param();
			$test=[
			'customer_name'=>$data['customer_name'],
            'province'=>$data['province'],
            'city'=>$data['city'],
            'area'=>$data['area'],
            'time'=>$data['time'], 
            'weight'=>$data['weight'], 
            'result'=>$data['result'], 
            'tel'=>$data['tel'],
            'nex'=>$data['nex'],
			];
			$update=Customer::where('customer_id',$data['id'])->update($test);
			$message=$update?"更新成功。":"更新失败。";
			$status=$update?1:0;
			return ['message'=>$message,'status'=>$status];
		}
		$id=$request->param('id');
		$list=Customer::get($id);
		$province=Province::all();
		$this->assign('province',$province);
		$this->assign('list',$list);
		return $this->fetch();
	}
	// 客户信息添加
	public function infodel()
	{
		$request=Request::instance();
		$id=$request->param('id');
		$del=Customer::destroy($id);
		$message=$del?'删除成功。':'删除失败。';
		$status=$del?1:0;
		return ['message'=>$message,'status'=>$status];
	}
	//客户资料,文件
	public function file()
	{
		// $list=Casedesign::get(3);
		$list=Customer::paginate(15);
		$this->assign('list',$list);
		return $this->fetch();
	}

}