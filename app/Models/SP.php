<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SP extends Model
{
    use HasFactory;
    protected $table = 'hwa_sp';
    protected $guarded = ['id'];
    protected $dates = ['created_at'];

    public function kar_()
    {
        return $this->belongsTo(User::class, 'kar_id');
    }
}
