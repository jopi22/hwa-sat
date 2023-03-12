<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catering extends Model
{
    use HasFactory;
    protected $table = 'hwa_catering';
    protected $fillable = [
        'id',
        'tgl',
        'master_id',
        'cat_id',
        'pagi',
        'siang',
        'sore',
        'malam',
        'total',
        'ket',
    ];

    public function cat_(){
        return $this->belongsTo(CateringMaster::class, 'cat_id');
    }
}
