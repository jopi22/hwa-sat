<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Breakdown extends Model
{
    use HasFactory;
    protected $table = 'hwa_breakdown';
    protected $guarded = ['id'];
    protected $dates = ['jam_mulai','jam_selesai'];

    public function equip_(){
        return $this->belongsTo(Equipment::class, 'equip_id');
    }


    public function dedi_(){
        return $this->belongsTo(Dedicated::class, 'dedicated_id');
    }
}
