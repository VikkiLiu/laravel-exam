<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sjgl extends Model{

    protected $table = 'test';

    protected $fillable=['tname','ttype'];

    //指定tno
    protected $primaryKey='tno';

    protected function asDateTime($value)
    {
        return $value;
    }
}