<?php 
namespace app\user\controller;
use app\com\controller\Accesscontrol;
use think\Request;
use app\user\model\Role;
use app\system\model\Power as PowerModel;
use app\system\model\Module;
use app\system\model\Controller as ControllerModel;
class Power extends Accesscontrol{
	public function index(){
	$list=Role::all();
    $this->assign("list",$list);
    return $this->fetch();
	}
	public function poweredit(){
		$this->control(36);
		$request = Request::instance();
		$id=$request->param('id');
		$list=Role::get($id);
		$arr_power = explode(",",$list['powerid']);
		$html=[];
		$module=Module::all();
		$controller=ControllerModel::all();
		$power=PowerModel::all();
		foreach ($module as $key => $value) {
			$var=['title'=> $value['m_name'], 'value'=>'module,'.$value['m_id'], 'data'=> []];
				foreach ($controller as $key => $value1) {
					if($value['m_id']==$value1['m_id']){
						$var1=['title'=> $value1['c_name'], 'value'=>'controller,'.$value1['c_id'],'data'=> []];
					}
					elseif (isset($value1['m_id'])) {
						continue;
					}
						foreach ($power as $key => $value2) {
							if($value1['c_id']==$value2['c_id']){
						$var2=['title'=> $value2['action_name'], 'value'=>'power,'.$value2['id'],'data'=> []];
						if(in_array($value2['id'],$arr_power))
						{
							$var2['checked']=true;
						}
						array_push($var1['data'],$var2);
					}
				}
						array_push($var['data'],$var1);
			}
				array_push($html,$var);
		}
         	$value= json_encode($html,JSON_UNESCAPED_UNICODE);
    		$this->assign("json",$value);
    		$this->assign('list',$list);
    		return $this->fetch();
	}
	// 权限管理
	public function addpower(){
		$message=$this->control(14);
		$status="";
		if(empty($message)){
		$request=Request::instance();
		$id='';
		$role_id=$request->param('role_id');
		$data=input('post.id/a');
		foreach ($data as $value) {
			$arr = explode(",",$value);
			if($arr['0']=='power'){
				$id.=$arr['1'].',';
			}
		}
		$id=substr($id,0,strlen($id)-1);
		$update=Role::where('role_id',$role_id)->update(['powerid'=>$id]);
        $message=($update)?"授权成功成功。":"系统错误，更新失败。";
        $status=($update)?1:0;
         $role=Role::where('role_id',$role_id)->value('name');
        $this->addlog('修改角色：'.$role.'的权限');
    }
	return ['message'=>$message,'status'=>$status];
}


}
 ?>
