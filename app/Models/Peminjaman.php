<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $table = 'peminjamans';
    protected $fillable = [
        'nis',
        'nama',
        'rombel',
        'rayon',
        'jk',
        'angkatan',
        'barang',
    ];
}
