<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;

    protected $table = 'hwa_absensi';
    protected $fillable = ['id','tgl','karyawan','status','periode_id','pengajuan_fk','kode_unik'];
    protected $dates = ['tanggal'];

    public function karyawan_()
    {
        return $this->belongsTo(User::class, 'karyawan');
    }


    public function status_absensi_()
    {
        return $this->belongsTo(Status_Absensi::class, 'status');
    }


    public function pengajuan_()
    {
        return $this->belongsTo(PengajuanAbsensi::class, 'pengajuan');
    }

}
