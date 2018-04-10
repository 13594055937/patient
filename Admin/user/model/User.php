<?php
/**
 * Created by PhpStorm.
 * User: wangsuiyang
 * Date: 2018/1/11
 * Time: 17:19
 */
namespace app\user\model;
use think\Model;
class User extends Model
{
    // 关闭自动写入update_time字段
    protected $updateTime = false;
    // protected $dateFormat = 'Y:m:d h:m:s';
    //  protected $type = [
    //     'latestLogin'  =>  'timestamp',
    // ];
    
    public function role()
    {
        return $this->belongsTo('Role');
    }


}