<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uang extends Model
{
    use HasFactory;

    protected $table = 'uang_saku_user';
    protected $fillable =['id_user','bulan','jumlah_uang_user'];
}
