<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class area extends Model
{
    /**
     * 与模型关联的数据表。
     *
     * @var string
     */
    protected $table = 'area';

    /**
     * 可以被批量赋值的属性。
     *
     * @var array
     */
    protected $fillable = [
        'id', 'fatherid', 'areaname',
    ];
}
