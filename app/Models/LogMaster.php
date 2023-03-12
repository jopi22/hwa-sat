<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogMaster extends Model
{
    use HasFactory;
    protected $table = 'hwa_log_master';
    protected $fillable = ['id','master_id','equip_id','tgl','barang','jumlah','ket','satuan','hmkm'];

    public function equip_(){
        return $this->belongsTo(Equipment::class, 'equip_id');
    }


    public function log_(){
        return $this->belongsTo(Logistik::class, 'log_id');
    }

}
