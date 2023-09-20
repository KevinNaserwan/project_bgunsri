<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengalaman extends Model
{
    use HasFactory;

    protected $table = 'pengalaman';
    protected $fillable = ['NIM','nama_organisasi','jabatan','periode'];

    public $timestamps = false;
}
