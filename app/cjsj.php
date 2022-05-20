<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cjsj extends Model{

    protected $table = 'grade';

    protected $primaryKey='gid';

    public $guarded = [];

    protected function asDateTime($value)
    {
        return $value;
    }
}