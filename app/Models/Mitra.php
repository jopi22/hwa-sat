<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    use HasFactory;
    protected $table = 'hwa_mitra';
    protected $guarded = ['id'];
    protected $dates = ['tgl_kontrak','akhir_kontrak'];
}
