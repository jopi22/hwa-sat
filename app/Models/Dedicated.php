<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dedicated extends Model
{
    use HasFactory;
    protected $table = 'hwa_Dedicated';
    protected $guarded = ['id'];
}
