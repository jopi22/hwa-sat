<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resign extends Model
{
    use HasFactory;
    protected $table = 'hwa_resign';
    protected $fillable = ['status','karyawan','surat'];
    protected $dates = ['created_at','tgl_bergabung'];

    public function karyawan_()
    {
        return $this->belongsTo(User::class, 'karyawan');
    }
}
