<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class xs extends Model{

    protected $table = 'student';

    protected $primaryKey='sno';

    protected $guarded=[];

    public $timestamps=FALSE;

    protected function asDateTime($value)
    {
        return $value;
    }
}