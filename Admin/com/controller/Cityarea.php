<?php 
namespace app\com\controller;
use think\Controller;
use think\Request;
use app\company\model\Company as CompanyModel;
use app\com\model\Province;
use app\com\model\City;
use app\com\model\District;
class Cityarea extends Controller{
	// public function index(){
	// 	$data='';
	// 	$province=Province::all();
	// 	$this->assign('province',$province);
	// 	$this->assign('data',$data);
	// 	return $this->fetch();
	// }
	public function getcityinfo(){
		$html = "<option value=''>请选择市</option>";
		$request = Request::instance();
		$province=$request->param('province');
		$model=Province::get(['name'=>$province]);
		$cityinfo = City::all(['provinceid'=>$model->id]);
		foreach ($cityinfo as $key => $value) {
		$html.= "<option value='{$value['cityname']}'>{$value['cityname']}</option>" ;
		}
		echo $html;
	}
	public function getareainfo(){
		$html = "<option value=''>请选择城区</option>";
		$request = Request::instance();
		$data=$request->param();
		$province=Province::get(['name'=>$data['province']]);
		$model=City::get(['cityname'=>$data['city'],'provinceid'=>$province->id]);
		$areainfo = District::all(['cityid'=>$model->id]);
		foreach ($areainfo as $key => $value) {
			$html.= "<option value='{$value['districtname']}'>{$value['districtname']}</option>" ;
		}
		echo $html;
	}
}
 ?>