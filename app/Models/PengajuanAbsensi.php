<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanAbsensi extends Model
{
    use HasFactory;
    protected $table = 'hwa_pengajuan_absensi';
    protected $fillable = [
        'id',
        'master_id',
        'periode_id',
        'karyawan',
        'surat',
        'file',
        'status',
        'pengajuan_pk',
        'created_at',
        'respon_status',
    ];

    public function kar_peng_()
    {
        return $this->belongsTo(User::class, 'karyawan');
    }


    public function master_()
    {
        return $this->belongsTo(Master::class, 'master_id');
    }
}
