<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kemampuan extends Model
{
    use HasFactory;
    protected $table = 'kemampuan';
    protected $fillable = ['NIM','bidang','keahlian'];

    public $timestamps = false;
}
