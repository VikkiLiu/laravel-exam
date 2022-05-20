<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cjks extends Model{

    protected $table = 'grade';

    //允许批量操作的字段-所有
    public $guarded = [];

    protected function asDateTime($value)
    {
        return $value;
    }
}