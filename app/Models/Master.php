<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Master  extends Model
{
    use HasFactory;

    protected $table ='hwa_master';
    protected $fillable =['id','biaya_sewa', 'periode','total','status','ket','ket1','ket2','gaji','created_at','insentif','lemburan','pokok'];
}
