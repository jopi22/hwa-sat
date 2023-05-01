<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipMaster extends Model
{
    use HasFactory;
    protected $table = 'hwa_equip_master';
    protected $dates = ['updated_id'];

    protected $fillable = [
        'id',
        'master_id',
        'equip_id',
        'hm_awal',
        'hm_akhir',
        'total_pot',
        'total_hm',
        'total_jam',
        'grand_total',
        'kode_unik',
    ];

    public function equip_(){
        return $this->belongsTo(Equipment::class, 'equip_id');
    }
}
