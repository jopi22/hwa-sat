<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Performa_hm extends Model
{
    use HasFactory;
    protected $fillable = ['id','aktivitas_id', 'rest_time', 'category_id', 'tgl', 'master_id', 'shift_id', 'kar_id', 'equip_id', 'hm_awal', 'hm_akhir', 'hm_pot', 'hm_total', 'lokasi_id', 'dedicated_id', 'remark', 'created_at', 'updated_at', 'jam_awal', 'jam_akhir', 'jam_total', 'jam_pot', 'tipe', 'asu'];
    protected $table = 'hwa_performa_hm';
    protected $dates = ['created_at', 'jam_awal', 'jam_akhir'];

    public function master_()
    {
        return $this->belongsTo(Master::class, 'master_id');
    }

    public function shift_()
    {
        return $this->belongsTo(Shift::class, 'shift_id');
    }

    public function kar_()
    {
        return $this->belongsTo(User::class, 'kar_id');
    }

    public function equip_()
    {
        return $this->belongsTo(Equipment::class, 'equip_id');
    }

    public function lokasi_()
    {
        return $this->belongsTo(Location::class, 'lokasi_id');
    }

    public function dedicated_()
    {
        return $this->belongsTo(Dedicated::class, 'dedicated_id');
    }

    public function category_()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function aktivitas_()
    {
        return $this->belongsTo(Aktivitas::class, 'aktivitas_id');
    }

}
