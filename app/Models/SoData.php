<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoData extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'hwa_so_data';
    protected $guarded = ['id'];
    protected $dates = ['tgl'];

    public function barang_()
    {
        return $this->belongsTo(Barang::class, 'barang_id');
    }

    public function so__()
    {
        return $this->belongsTo(SoPeriode::class, 'kode', 'so_id');
    }
}
