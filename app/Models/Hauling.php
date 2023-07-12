<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hauling extends Model
{
    use HasFactory;
    protected $table = 'hwa_hauling';
    protected $dates = ['tgl'];
    protected $fillable = [
        'id',
        'tgl',
        'equip_id',
        'kar_id',
        'dedi_id',
        'master_id',
        'start_loc',
        'end_loc',
        'timbangan',
    ];

    public function kar_()
    {
        return $this->belongsTo(User::class, 'kar_id');
    }
    public function equip_()
    {
        return $this->belongsTo(Equipment::class, 'equip_id');
    }
    public function dedi_()
    {
        return $this->belongsTo(Dedicated::class, 'dedi_id');
    }
    public function loc_s()
    {
        return $this->belongsTo(Location::class, 'start_loc');
    }
    public function loc_e()
    {
        return $this->belongsTo(Location::class, 'end_loc');
    }
}
