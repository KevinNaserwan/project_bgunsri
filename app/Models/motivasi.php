<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class motivasi extends Model
{
    use HasFactory;
    protected $table = 'motivasi';
    protected $fillable = ['NIM','motivasi'];

    public $timestamps = false;
}
