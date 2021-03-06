<?php


namespace app\api\model;


use think\Model;

class BaseModel extends Model
{
    protected function prefixImgUrl($value, $data)
    {
        $finalUrl =ltrim($value,"/");
        if ($data['from'] == 1) {
            $finalUrl = config('img_prefix') . $finalUrl;
        }
        return $finalUrl;
    }
}