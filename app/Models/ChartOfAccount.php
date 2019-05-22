<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChartOfAccount extends Model
{
    protected $primaryKey = ['group_code', 'gl_code','gl_detail_code'];
}
