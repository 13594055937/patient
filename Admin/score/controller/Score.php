<?php 
namespace app\score\controller;
use app\com\controller\Accesscontrol;
use think\Request;
use think\Db;
use app\score\model\Metapedes as MetapedesModel;
use app\score\model\Midleg;
use app\score\model\Propodeum;
use app\patient\model\Customer;
class Score extends Accesscontrol{
 	public function com(){
 		$request=Request::instance();
 		$list=Customer::paginate(8);
		if($request->isget()){
			$text=$request->param('value');
			$list=Db::table('customer')
			->where("customer_name like '%$text%'")
			->paginate(8);
		}
		$this->assign('list',$list);
		return $this->fetch();
 	}
	// 后足
	public function metapedes()
	{
		$list=Db::table('metapedes')->alias('a')
		->join('customer b', 'a.customer_id = b.customer_id')
		->paginate(15);
		$count=MetapedesModel::count();
		$this->assign('list',$list);
		$this->assign('count',$count);
		return $this->fetch();
	}
	public function metapedesadd()
	{
		$request=Request::instance();
		if($request->ispost()){
			$status='';
			try {
			$data=$request->param();
			$id=MetapedesModel::where('customer_id',$data['customer_id'])->value('metapedes_id');
			if($id){
				return ['message'=>"该客户调研已存在，请勿重复添加。",'status'=>$status];
			}
			$test=[
			'pain'=>$data['pain'],
			'auxiliary'=>$data['auxiliary'],
			'distance'=>$data['distance'],
			'pavement'=>$data['pavement'],
			'gait'=>$data['gait'],
			'sagittal'=>$data['Sagittal'],
			'foot'=>$data['foot'],
			'stability'=>$data['stability'],
			'line_of_force'=>$data['Line_of_force'],
			'customer_id'=>$data['customer_id']
			];
				$metapedes=MetapedesModel::create($test);
				$message=$metapedes?'保存成功。':'保存失败。';
				$status=$metapedes?1:0;
			} catch( \Exception $e){
				return ['message'=>$e->getMessage(),'status'=>$status];
			}
			return ['message'=>$message,'status'=>$status];
		}

		$list = Db::table('customer')->column('customer_name');
		$this->assign('list',$list);
		return $this->fetch();
	}
	public function metapedesedit(){
		$request = Request::instance();
		$data=$request->param();
		if($request->ispost()){
			$test=[
			'pain'=>$data['pain'],
			'auxiliary'=>$data['auxiliary'],
			'distance'=>$data['distance'],
			'pavement'=>$data['pavement'],
			'gait'=>$data['gait'],
			'sagittal'=>$data['Sagittal'],
			'foot'=>$data['foot'],
			'stability'=>$data['stability'],
			'line_of_force'=>$data['Line_of_force'],
			];
			$update=MetapedesModel::where('metapedes_id',$data['metapedes_id'])->update($test);
			$message=$update?'修改成功。':'修改失败。';
			return ['message'=>$message];
		}
		$list=Db::table('metapedes')->alias('a')
		->join('customer b', 'a.customer_id = b.customer_id')
		->where('metapedes_id',$data['id'])
		->select();
		$list=$list['0'];
		$this->assign('list',$list);
		return $this->fetch();
	}
	public function metapedesearch()
	{
		$request = Request::instance();
        $value = $request->param('value');
     	$list=Db::table('metapedes')->alias('a')
		->join('customer b', 'a.customer_id = b.customer_id')
		->where("customer_name like '%$value%'")
		->paginate(15);
		$count=Db::table('metapedes')->alias('a')
		->join('customer b', 'a.customer_id = b.customer_id')
		->where("customer_name like '%$value%'")
		->count();
        $this->assign('list',$list);
        $this->assign('count',$count);
        return $this->fetch('metapedes');
	}
	public function metapededel(){
		$request=Request::instance();
		$id=$request->param('id');
		$del=MetapedesModel::destroy($id);
		$message=$del?'删除成功。':'删除失败。';
		return ['message'=>$message];
	}
	// 前足
	public function propodeum()
	{
		$list=Db::table('propodeum')->alias('a')
		->join('customer b', 'a.customer_id = b.customer_id')
		->paginate(15);
		$count=Propodeum::count();
		$this->assign('list',$list);
        $this->assign('count',$count);
		return $this->fetch();
	}
	public function propodeumadd()
	{
		$request=Request::instance();
		if($request->ispost()){
			$status='';
			try {
			$data=$request->param();
			$id=Propodeum::where('customer_id',$data['customer_id'])->value('propodeum_id');
			if($id){
				return ['message'=>"该客户调研已存在，请勿重复添加。",'status'=>$status];
			}
			$test=[
			'pain'=>$data['pain'],
			'auxiliary'=>$data['auxiliary'],
			'shoes'=>$data['shoes'],
			'metatarsophalangeal'=>$data['Metatarsophalangeal'],
			'toe'=>$data['Toe'],
			'stability'=>$data['stability'],
			'tyloma'=>$data['tyloma'],
			'line_of_force'=>$data['Line_of_force'],
			'customer_id'=>$data['customer_id']
			];
				$propodeum=Propodeum::create($test);
				$message=$propodeum?'保存成功。':'保存失败。';
				$status=$propodeum?1:0;
			} catch( \Exception $e){
				return ['message'=>$e->getMessage(),'status'=>$status];
			}
			return ['message'=>$message,'status'=>$status];
		}
		$list = Db::table('customer')->column('customer_name');
		$this->assign('list',$list);
		return $this->fetch();
	}
	public function propodeumsearch(){
		$request = Request::instance();
        $value = $request->param('value');
     	$list=Db::table('propodeum')->alias('a')
		->join('customer b', 'a.customer_id = b.customer_id')
		->where("customer_name like '%$value%'")
		->paginate(15);
		$count=Db::table('propodeum')->alias('a')
		->join('customer b', 'a.customer_id = b.customer_id')
		->where("customer_name like '%$value%'")
		->count();
        $this->assign('list',$list);
        $this->assign('count',$count);
        return $this->fetch('propodeum');
	}
	public function propodeumdel(){
		$request=Request::instance();
		$id=$request->param('id');
		$del=Propodeum::destroy($id);
		$message=$del?'删除成功。':'删除失败。';
		return ['message'=>$message];
	}
	public function propodeumedit(){
		$request = Request::instance();
		$data=$request->param();
		if($request->ispost()){
			$test=[
			'pain'=>$data['pain'],
			'auxiliary'=>$data['auxiliary'],
			'shoes'=>$data['shoes'],
			'metatarsophalangeal'=>$data['Metatarsophalangeal'],
			'toe'=>$data['Toe'],
			'stability'=>$data['stability'],
			'tyloma'=>$data['tyloma'],
			'line_of_force'=>$data['Line_of_force'],
			];
			$update=Propodeum::where('propodeum_id',$data['propodeum_id'])->update($test);
			$message=$update?'修改成功。':'修改失败。';
			return ['message'=>$message];
		}
		$list=Db::table('propodeum')->alias('a')
		->join('customer b', 'a.customer_id = b.customer_id')
		->where('propodeum_id',$data['id'])
		->select();
		$list=$list['0'];
		$this->assign('list',$list);
		return $this->fetch();
	}
	// 中足
	public function midleg()
	{
		$list=Db::table('midleg')->alias('a')
		->join('customer b', 'a.customer_id = b.customer_id')
		->paginate(15);
		$count=Midleg::count();
		$this->assign('list',$list);
		$this->assign('count',$count);
		return $this->fetch();
	}
	public function midlegadd()
	{
		$request=Request::instance();
		if($request->ispost()){
			$status='';
			try {
			$data=$request->param();
			$id=Midleg::where('customer_id',$data['customer_id'])->value('midleg_id');
			if($id){
				return ['message'=>"该客户调研已存在，请勿重复添加。",'status'=>$status];
			}
			$test=[
			'pain'=>$data['pain'],
			'auxiliary'=>$data['auxiliary'],
			'distance'=>$data['distance'],
			'pavement'=>$data['pavement'],
			'gait'=>$data['gait'],
			'shoes'=>$data['shoes'],
			'line_of_force'=>$data['Line_of_force'],
			'customer_id'=>$data['customer_id']
			];
				$metapedes=Midleg::create($test);
				$message=$metapedes?'保存成功。':'保存失败。';
				$status=$metapedes?1:0;
			} catch( \Exception $e){
				return ['message'=>$e->getMessage(),'status'=>$status];
			}
			return ['message'=>$message,'status'=>$status];
		}
		$list = Db::table('customer')->column('customer_name');
		$this->assign('list',$list);
		return $this->fetch();
	}
	public function midlegedit(){
		$request = Request::instance();
		$data=$request->param();
		if($request->ispost()){
			$test=[
			'pain'=>$data['pain'],
			'auxiliary'=>$data['auxiliary'],
			'distance'=>$data['distance'],
			'pavement'=>$data['pavement'],
			'gait'=>$data['gait'],
			'shoes'=>$data['shoes'],
			'line_of_force'=>$data['Line_of_force'],
			];
			$update=Midleg::where('midleg_id',$data['midleg_id'])->update($test);
			$message=$update?'修改成功。':'修改失败。';
			return ['message'=>$message];
		}
		$list=Db::table('midleg')->alias('a')
		->join('customer b', 'a.customer_id = b.customer_id')
		->where('midleg_id',$data['id'])
		->select();
		$list=$list['0'];
		$this->assign('list',$list);
		return $this->fetch();
	}
	public function midlegsearch()
	{
		$request = Request::instance();
        $value = $request->param('value');
     	$list=Db::table('midleg')->alias('a')
		->join('customer b', 'a.customer_id = b.customer_id')
		->where("customer_name like '%$value%'")
		->paginate(15);
		$count=Db::table('midleg')->alias('a')
		->join('customer b', 'a.customer_id = b.customer_id')
		->where("customer_name like '%$value%'")
		->count();
        $this->assign('list',$list);
        $this->assign('count',$count);
        return $this->fetch('midleg');
	}
	public function midlegdel(){
		$request=Request::instance();
		$id=$request->param('id');
		$del=Midleg::destroy($id);
		$message=$del?'删除成功。':'删除失败。';
		return ['message'=>$message];
	}
}
