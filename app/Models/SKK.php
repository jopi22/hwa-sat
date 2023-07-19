<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SKK extends Model
{
    use HasFactory;
    protected $table = 'hwa_skk';
    protected $guarded = ['id'];

    public function kar_()
    {
        return $this->belongsTo(User::class, 'kar_id');
    }
}
