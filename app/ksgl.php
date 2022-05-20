<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ksgl extends Model{

    protected $table = 'exam';

    public $guarded = [];

    protected $primaryKey='eid';

    protected function asDateTime($value)
    {
        return $value;
    }
}