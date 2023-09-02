<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoPeriode extends Model
{
    use HasFactory;
    protected $table = 'hwa_so_periode';
    protected $guarded = ['id'];
    protected $dates = ['tgl'];
}
