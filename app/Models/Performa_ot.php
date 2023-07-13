<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Performa_ot extends Model
{
    use HasFactory;
    protected $table = 'hwa_performa_ot';
    protected $fillable = [
        'id',
        'master_id',
        'tgl',
        'remark',
        'kar_id',
        'equip_id',
        'jam_mulai',
        'jam_selesai',
        'jam_pot',
        'jam_total',
    ];
    protected $dates = [
        'jam_mulai',
        'jam_selesai',
        'created_at',
        'updated_at',
    ];

    public function kar_()
    {
        return $this->belongsTo(User::class, 'kar_id');
    }

    public function equipot_()
    {
        return $this->belongsTo(EquipMaster::class, 'equip_id');
    }
}
