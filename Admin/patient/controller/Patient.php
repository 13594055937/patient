<?php 
namespace app\patient\controller;
use app\com\controller\Accesscontrol;
use app\system\model\Casedesign as Casedesign;
use app\com\model\Province;
use app\patient\model\Pash;
use app\patient\model\File;
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
		$data=$request->param();
		if($file){
			$pash='uploads/'.date('Y').'/'.date('m').'/'.date('d').'/'.$data['time'];
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
			$status=0;
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
			$file_name=substr($data['file_name'],0,strlen($data['file_name'])-1);
			$file_name=explode('/',$file_name);
			$test_file=[
			'pash_id'=>$pash->pash_id
			];
			for ($i=0; $i <count($file_name) ; $i++) { 
				$test_file['file_name']=$file_name[$i];
				$file=File::create($test_file);
				if(!$file){
					return ['message'=>'文件写入失败','status'=>$status];
				}
			}
			if($pash && $customer){
				$message="成功。";
				$status=1;
			}
			return ['message'=>$message,'status'=>$status];
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
		$count=Customer::count();
		$this->assign('list',$list);
		$this->assign('count',$count);
		return $this->fetch();
	}
	public function fileinfo(){
		$request=Request::instance();
		$id=$request->param('id');
		$list=Db::table('file')->alias('a')
		->join('pash w','a.pash_id = w.pash_id')
		->where('w.pash_id',$id)
		->paginate(15);
		$pash=base64_encode(Pash::where('pash_id',$id)->value('pash'));
		$count=Db::table('file')->alias('a')
		->join('pash w','a.pash_id = w.pash_id')
		->where('w.pash_id',$id)->count();
		$this->assign('pash',$pash);
		$this->assign('count',$count);
		$this->assign('list',$list);
		return $this->fetch();
	}
	public function upload()
	{
		$request=Request::instance();
		$data=$request->param();
		if($request->ispost()){
			$message='';
			$file = request()->file('file');
			if($file){
				$pash=base64_decode($data['pash']);
				// 移动到服务器的上传目录 并且设置不覆盖
				$info = $file->move(ROOT_PATH . 'public' . DS . $pash,'');
				if($info){
					$file_name=iconv("GB2312","UTF-8",  $info->getSaveName());
					$pash_id=Pash::where('pash',$pash)->value('pash_id');
					$test=[
					'pash_id'=>$pash_id,
					'file_name'=>$file_name
					];
					$file_upload=File::create($test);
					$message=$file_upload?'上传成功。':'失败。';
				}else{
					$message=$file->getError();
				}	
		}
		return ['message'=>$message];
		}
		$this->assign('pash',$data['pash']);
		return $this->fetch();
	}

}