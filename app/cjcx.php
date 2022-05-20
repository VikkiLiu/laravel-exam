<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cjcx extends Model{

    protected $table = 'grade';

    protected $primaryKey = 'gid';
    //允许批量操作的字段
    public $guarded = [];

    protected function asDateTime($value)
    {
        return $value;
    }
}