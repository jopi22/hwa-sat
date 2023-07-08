<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogMaster extends Model
{
    use HasFactory;
    protected $table = 'hwa_log_master';
    protected $fillable = ['id','master_id','equip_id','tgl','barang_id','jumlah','ket','hmkm','status', 'log_tipe'];

    public function equip_(){
        return $this->belongsTo(Equipment::class, 'equip_id');
    }


    public function stok_(){
        return $this->belongsTo(Stok::class, 'barang_id');
    }

}
