<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SP extends Model
{
    use HasFactory;
    protected $table = 'hwa_sp';
    protected $fillable = ['no','karyawan','surat'];
    protected $dates = ['created_at'];

    public function karyawan_()
    {
        return $this->belongsTo(User::class, 'karyawan');
    }
}
