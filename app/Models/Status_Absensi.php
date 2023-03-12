<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status_Absensi extends Model
{
    use HasFactory;

    protected $table = 'hwa_status_absensi';
    protected $guarded = 'id';
}
