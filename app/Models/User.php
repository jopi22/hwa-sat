<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guarded = [
        'id'
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $dates = [
        'tgl_gabung',
        'tgl_resign',
        'tgl_lahir',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function absensi_()
    {
        return $this->hasMany(Absensi::class, 'karyawan');
    }

    public function history_()
    {
        return $this->belongsTo(History::class, 'token','token');
    }

}
