<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    protected $table = 'hwa_history';
    protected $guarded = ['id'];

    public function user_()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
