<?php

namespace app\admin\model;

use app\common\model\TimeModel;

class TestGoods extends TimeModel
{

    protected $name = "test_goods";

    protected $deleteTime = 'delete_time';

    
    public function testCate()
    {
        return $this->belongsTo('\app\admin\model\TestCate', 'cate_id', 'id');
    }


}