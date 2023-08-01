<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kas extends Model
{
    use HasFactory;
    protected $table = 'hwa_kas';
    protected $fillable = ['id','tipe','status', 'tgl','rincian','master_id','jumlah'];
}
