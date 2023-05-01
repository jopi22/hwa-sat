<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanAbsensiList extends Model
{
    use HasFactory;
    protected $table = 'hwa_pengajuan_absensi_list';
    protected $guarded = ['id'];

    public function pengajuan_(){
        return $this->belongsTo(PengajuanAbsensi::class, 'created_id');
    }

    public function tgl_(){
        return $this->belongsTo(Absensi::class, 'absensi_id');
    }
}
