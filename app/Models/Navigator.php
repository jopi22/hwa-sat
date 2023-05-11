<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Navigator extends Model
{
    use HasFactory;
    protected $table = 'hwa_navigator';
    protected $guarded = ['id'];

    public function kar_(){
        return $this->belongsTo(User::class, 'karyawan');
    }
}
