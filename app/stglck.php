<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stglck extends Model{

    protected $table = 'question';

    protected $fillable=['qsection','qknow','tname','qquestion','qa','qb','qc','qd'];

    protected function asDateTime($value)
    {
        return $value;
    }
}