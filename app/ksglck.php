<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ksglck extends Model{

    protected $table = 'exam';

    protected $fillable=['ename','stype','tname','escore','etime'];

    protected function asDateTime($value)
    {
        return $value;
    }
}