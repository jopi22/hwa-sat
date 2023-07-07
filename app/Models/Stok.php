<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stok extends Model
{
    use HasFactory;
    protected $table = 'hwa_stok';
    protected $dates = ['updated_at'];

    protected $fillable = [
        'id',
        'kode',
        'barang',
        'tipe_alat',
        'brand',
        'jumlah',
        'satuan',
        'jenis',
    ];
}
