<?php 
namespace app\patient\model;
use think\Model;
class Customer extends Model{
	   public function getnexAttr($value)
    {
        $status = [1=>'男',0=>'女'];
        return $status[$value];
    }

}
 ?>
