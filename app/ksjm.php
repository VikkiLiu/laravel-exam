<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ksjm extends Model{

    protected $table = 'exam';
    //允许批量操作的字段
    public $guarded = [];

    public $primaryKey='eid';

    protected function asDateTime($value)
    {
        return $value;
    }
}