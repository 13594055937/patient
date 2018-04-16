<?php
namespace app\system\model;
use think\Model;
class Diagnosis extends Model
{
	 public function getdifferenceAttr($value)
    {
        $status = [0=>'医生',1=>'技师'];
        return $status[$value];
    }
}