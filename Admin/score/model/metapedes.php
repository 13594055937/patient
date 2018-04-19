<?php 
namespace app\score\model;
use think\Model;
class Metapedes extends Model{
  	// 关闭自动写入update_time字段
    protected $updateTime = false;
    //自定义时间戳字段名
    protected $createTime = 'metapedescreate_time';
}