<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kuliah extends Model
{
    use HasFactory;
    protected $fillable = [
        'alumniId',
        'tempatKuliah',
        'jurusan',
        'tahunMasuk',
        'alamat',
    ];
}
