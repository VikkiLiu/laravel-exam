<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ggao extends Model{

    protected $table = 'student';
    //允许批量操作的字段
    public $guarded = [];

    protected function asDateTime($value)
    {
        return $value;
    }
}