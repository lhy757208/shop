<?php


namespace app\api\model;


class Theme extends BaseModel
{

    protected $hidden = ['delete_time', 'topic_img_id', 'head_img_id'];

    public function topicImg()
    {
        return $this->belongsTo("image","topic_img_id","id");
    }

    public function headImg()
    {
        return $this->belongsTo("image","head_img_id","id");
    }

    /**
     * 关联product，多对多关系
     */
    public function products()
    {
        return $this->belongsToMany('product', "theme_product", "product_id", "theme_id");
    }
}