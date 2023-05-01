<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoGaleri extends Model
{
    use HasFactory;
    protected $table = 'hwa_foto_galeri';
    protected $fillable = ['galeri_id','foto'];
}
