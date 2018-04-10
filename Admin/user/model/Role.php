<?php 
namespace app\user\model;
use think\Model;
class Role extends Model{
	 // 关闭自动写入update_time字段
    protected $updateTime = false;
    protected $createTime = 'create_roletime';
    public function user()
    {
        return $this->hasMany('User');
    }
    public function power()
    {
        return $this->hasMany('Power');
    }

}
 ?>