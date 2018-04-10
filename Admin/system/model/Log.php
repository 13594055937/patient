<?php 
namespace app\system\model;
use think\Model;
class Log extends Model{
	 // 关闭自动写入update_time字段
    protected $updateTime = false;
}
 ?>