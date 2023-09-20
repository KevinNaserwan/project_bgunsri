<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pendidikanformal extends Model
{
    use HasFactory;
    protected $table = 'pendidikanformal';
    protected $fillable = ['NIM','nama_sekolah','tahun_masuk','tahun_keluar'];

    public $timestamps = false;
}
