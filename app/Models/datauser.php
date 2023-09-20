<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datauser extends Model
{
    use HasFactory;
    protected $table = 'datauser';
    protected $fillable = ['nama_lengkap', 'panggilan', 'nim', 'prodi', 'ttl', 'umur', 'jenis_kelamin', 'alamat', 'no_telp', 'email', 'line', 'berat_badan', 'ig', 'fb', 'tinggi_badan', 'hobi', 'bahasa', 'nama_ayah', 'nama_ibu', 'pekerjaan_ortu', 'no_ortu', 'alamat_ortu', 'pas_foto', 'close_up', 'full_body'];
    public $timestamps = false;
}
