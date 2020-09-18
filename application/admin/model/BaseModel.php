<?php


namespace app\admin\model;


use think\Model;

class BaseModel extends Model
{
    protected function  prefixImgUrl($value, $data){
        $finalUrl = $value;
        if($data['from'] == 1){
            $finalUrl = config('img_prefix').$value;
        }
        return $finalUrl;
    }
}