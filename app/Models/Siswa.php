<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'nis',
        'nama',
        'rombel_id',
        'rayon',
        'jk',
    ];

    public function rombel() {
        return $this->belongsTo(Rombel::class, 'rombel_id');
    }
}
