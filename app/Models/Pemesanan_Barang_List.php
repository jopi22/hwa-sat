<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan_Barang_List extends Model
{
    use HasFactory;
    protected $table = 'hwa_pemesanan_barang_list';
    protected $guarded = ['id'];
    protected $dates = ['tgl'];

    public function barang_()
    {
        return $this->belongsTo(Barang::class, 'barang_id');
    }

    public function pemesanan_()
    {
        return $this->belongsTo(Pemesanan_Barang::class, 'pemesanan_id');
    }
}
