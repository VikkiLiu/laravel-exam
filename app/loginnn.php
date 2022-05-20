<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loginnn extends Model{

    //关联的数据表
    //protected $table = ['student','admin','teacher'];
    protected $table = 'teacher';

    //主键
    protected $primaryKey = 'tid';

    //允许批量操作的字段
    public $guarded = [];//= $fillable......

    //是否维护created_at 和 updated_at字段
    public $timestamps =false;

    protected function asDateTime($value)
    {
        return $value;
    }
}
