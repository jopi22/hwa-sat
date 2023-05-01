<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catatan extends Model
{
    use HasFactory;
    protected $table = 'hwa_catatan';
    protected $guarded = ['id'];
    protected $dates = ['created_at'];
}
