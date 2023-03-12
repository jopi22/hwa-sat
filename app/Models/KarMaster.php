<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KarMaster extends Model
{
    use HasFactory;
    protected $table = 'hwa_kar_master';
    protected $fillable = [
        'id',
        'master_id',
        'kode_unik',
        'kar_id',
        'hm_total',
        'gaji_total',
        'tipe_gaji',
        'insentif',
        'lemburan',
        'jam_total',
        'abs_h',
        'abs_a',
        'abs_i',
        'abs_itk',
        'abs_s',
        'abs_stk',
        'abs_c',
    ];
    protected $dates = [
        'updated_at',
    ];


    public function kar_(){
        return $this->belongsTo(User::class, 'kar_id');
    }
}
