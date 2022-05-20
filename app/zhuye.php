<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class zhuye extends Model{

    //指定表名
    protected $table = 'test';

    //指定tno
    protected $primaryKey='tno';

    protected $fillable=['qsection','qknow','tname','qquestion','qa','qb','qc','qd'];
}