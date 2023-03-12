<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CateringMaster extends Model
{
    use HasFactory;
    protected $table = 'hwa_catering_master';
    protected $fillable = [
        'id',
        'atas_nama',
        'master_id',
        'bank',
        'no_rek',
        'porsi_harga',
        'tot_pagi',
        'tot_siang',
        'tot_sore',
        'tot_malam',
        'tot_porsi',
        'tot_harga',
        'valid',
    ];
}
