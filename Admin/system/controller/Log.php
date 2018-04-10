<?php
namespace app\system\controller;
use app\com\controller\Accesscontrol;
use app\system\model\Log as LogModel;
use think\Request;
use think\Db;
class Log extends Accesscontrol{
	public function index(){
        $message=$this->control(31);
		$list=Db::table('log')->order('create_time', 'desc')->paginate(15);
		$count=LogModel::count();
		$this->assign('list',$list);
		$this->assign('count',$count);
		return $this->fetch();
	}
	public function deletelog(){
		$message=$this->control(32);
        if(empty($message)){
        $request = Request::instance();
        $data=$request->param();
        $message='';
        for($i=0;$i<count($data,1)-1;$i++){
        $id=$data['delete'][$i];
        if(LogModel::destroy($id)){
            $message="批量删除成功。";
         }
         else{
         	$message="删除中断。";break;
         }
    }
    $count=count($data,1)-1;
     $this->addlog('批量删除日志：'.$count.'条，'.'结果：'.$message);
}
    return ["message"=>$message];
	}
    // 搜索日志 
    public function search(){
        $message=$this->control(33);
        $request = Request::instance();
        $data=$request->param();
        $value=$data['value'];
        if($data['end_time']!=0){
        $list=Db::table('log')
        // where('create_time','between time',[$data['start_time'],$data['end_time']])
        ->whereTime('create_time', '>=', $data['start_time'])
        ->whereTime('create_time', '<=', $data['end_time'])
        ->where('log_operation','like','%'.$value.'%')
        ->order('create_time', 'desc')->paginate(15);
        $count=Db::table('log')
        // ->where('create_time','between time',[$data['start_time'],$data['end_time']])
        ->whereTime('create_time', '>=', $data['start_time'])
        ->whereTime('create_time', '<=', $data['end_time'])
        ->where('log_operation','like','%'.$value.'%')
        ->count();
        }
        $this->assign('count',$count);
        $this->assign('list',$list);
        return $this->fetch('index');
    }


}
?>
