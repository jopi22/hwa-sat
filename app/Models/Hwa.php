<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hwa extends Model
{
    use HasFactory;
    protected $table = 'hwa_profil';
    protected $guarded = ['id'];
}
