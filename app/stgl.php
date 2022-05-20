<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stgl extends Model{

    protected $table = 'question';

    protected $primaryKey='qno';

    protected $fillable=['qsection','qknow','tname','qquestion','qa','qb','qc','qd'];

    protected function asDateTime($value)
    {
        return $value;
    }



}