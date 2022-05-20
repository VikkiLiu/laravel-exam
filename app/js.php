<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class js extends Model{

    protected $table = 'teacher';

    protected $primaryKey='tno';

    protected $guarded=[];

    public $timestamps=FALSE;

    protected function asDateTime($value)
    {
        return $value;
    }
}