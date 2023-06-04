<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uang_saku extends Model
{
    use HasFactory;

    protected $table = 'Uang_saku';
    protected $fillable =['nama','email','jumlah_uang'];
}
