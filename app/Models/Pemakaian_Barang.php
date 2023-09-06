<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemakaian_Barang extends Model
{
    use HasFactory;
    protected $table = 'hwa_pemakaian_barang';
    protected $guarded = ['id'];

    public function equip_(){
        return $this->belongsTo(Equipment::class, 'equip_id');
    }

    public function barang_(){
        return $this->belongsTo(Barang::class, 'barang_id');
    }

}
