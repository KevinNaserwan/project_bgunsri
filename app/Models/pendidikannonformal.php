<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pendidikannonformal extends Model
{
    use HasFactory;

    protected $table = 'pendidikanonformal';
    protected $fillable = ['NIM', 'jenis_pendidikan', 'nama_lembaga', 'tahun_masuk', 'tahun_keluar'];

    public $timestamps = false;
}
