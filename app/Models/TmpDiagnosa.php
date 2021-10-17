<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TmpDiagnosa extends Model
{
    use HasFactory;

    protected $table = 'tmp_diagnosa';

    protected $fillable = ['nik', 'nama_pemilik', 'no_hp', 'alamat', 'nama_peliharaan', 'jekel', 'berat', 'suhu'];
}
