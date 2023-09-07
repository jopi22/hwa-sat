<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan_Barang extends Model
{
    use HasFactory;
    protected $table = 'hwa_pemesanan_barang';
    protected $guarded = ['id'];
    protected $dates = ['tgl'];
}
