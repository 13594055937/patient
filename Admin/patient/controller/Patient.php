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
		$list=Db::table('customer')->paginate('15');
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
            'age'=>$data['age'], 
            'weight'=>$data['weight'], 
            'height'=>$data['height'], 
            'diabetes'=>$data['is'], 
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
				$message="客户数据添加成功。";
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
            'age'=>$data['age'], 
            'weight'=>$data['weight'], 
            'height'=>$data['height'], 
            'diabetes'=>$data['is'], 
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
		$status="";
		$pash_id=Customer::where('customer_id',$id)->value('file_id');
		$count=File::where('pash_id',$pash_id)->count();
		if($count>0){
			$message="存在该客户相关资料，删除失败。";
			return ['message'=>$message,'status'=>$status];
		}
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
	//增加文件
	public function upload()
	{
		$request=Request::instance();
		$data=$request->param();
		if($request->ispost()){
			$message='';
			$status='';
			$file = request()->file('file');
			if($file){
				$pash=base64_decode($data['pash']);
				// 移动到服务器的上传目录 并且设置不覆盖
				$info = $file->move(ROOT_PATH . 'public' . DS . $pash,'');
				if($info){
					$file_name=iconv("GB2312","UTF-8",  $info->getSaveName());
					$file_id=File::where('file_name',$file_name)->value('file_id');
					if($file_id){
						$message="上传同名文件，已覆盖源文件。";
						$status=1;
						return ['message'=>$message,'status'=>$status];
					}
					$pash_id=Pash::where('pash',$pash)->value('pash_id');
					$test=[
					'pash_id'=>$pash_id,
					'file_name'=>$file_name
					];
					$file_upload=File::create($test);
					$message=$file_upload?'上传成功。':'失败。';
					$status=$file_upload?1:0;
				}else{
					$message=$file->getError();
				}	
		}
		return ['message'=>$message,'status'=>$status];
		}
		$this->assign('pash',$data['pash']);
		return $this->fetch();
	}
	// 文件重命名
	public function filerename()
	{
		$request=Request::instance();
		$data=$request->param();
		$list=Db::table('file')->alias('a')
		->join('pash w','a.pash_id = w.pash_id')
		->where('a.file_id',$data['id'])
		->select();
		$pash=ROOT_PATH . 'public' . DS  . $list[0]['pash'].'/'.$list[0]['file_name'];
		// $retule=rename($pash,ROOT_PATH . 'public' . DS  . $list[0]['pash'].'/'.$data['name']);
		$retule=rename(iconv('UTF-8','GBK',$pash), iconv('UTF-8','GBK',ROOT_PATH . 'public' . DS  . $list[0]['pash'].'/'.$data['name']));
		if($retule){
			$file_name=File::where('file_id',$data['id'])->update(['file_name'=>$data['name']]);
			$message=$file_name?"修改成功。":"修改文件名数据失败。";
		}else{
			$message='修改文件名失败。';
		}
		return ['message'=>$message];
	}
	//文件删除
	public function filedel()
	{
		$request=Request::instance();
		$id=$request->param('id');
		$status='';
		$list=Db::table('file')->alias('a')
		->join('pash w','a.pash_id = w.pash_id')
		->where('a.file_id',$id)
		->select();
		$pash=ROOT_PATH . 'public' . DS  . $list[0]['pash'].'/'.$list[0]['file_name'];
		try {
	    		if(is_file(iconv('UTF-8','GBK',$pash))){
	    		$file_del=unlink(iconv('UTF-8','GBK',$pash));
	    		}
	    		$del=File::destroy($id);
	    		$message=$del?"文件删除成功。":"删除文件数据失败。";
	    		$status=$del?1:0;
		} catch (\Exception $e) {
			$message=$e->getMessage();
		}
		return ['message'=>$message,'status'=>$status];
	}
	// 文件下载
	 public function down($pash,$file_name){
		$file_pash=iconv('UTF-8','GBK',$pash);
		$file_name=iconv('UTF-8','GBK',$file_name);
		if(is_file($file_pash)){  
        	$file=fopen($file_pash,"r");
			header("Content-Type: application/octet-stream");
			header("Accept-Ranges: bytes");
			header("Accept-Length: ".filesize($file_pash));
			header("Content-Disposition: attachment; filename=$file_name");
			echo fread($file,filesize($file_pash));
			fclose($file); 
        	$message="文件下载成功。";   
        }else{
        	$message="文件不存在。";   
        }
        return $message; 
	} 
	public function filedown(){
		$request=Request::instance();
		$id=$request->param('id');
		$list=Db::table('file')->alias('a')
		->join('pash w','a.pash_id = w.pash_id')
		->where('a.file_id',$id)
		->select();
		$pash=ROOT_PATH . 'public' . DS  . $list[0]['pash'].'/'.$list[0]['file_name'];
		// var_dump($pash);exit;
		$this->down($pash,$list[0]['file_name']);
	}
	public function searchuser(){
		$request=Request::instance();
		$text=$request->param('value');
		$list=Db::table('customer')
		->where("customer_name like '%$text%'")
		->paginate(15);
		$count=Db::table('customer')
		->where("customer_name like '%$text%'")
		->count();
		$this->assign('count',$count);
		$this->assign('list',$list);
		return $this->fetch('info');
	}

}