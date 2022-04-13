<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    use HasFactory;

    protected $table = 'penyakit';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['id', 'nama', 'slug', 'deskripsi', 'solusi', 'gambar'];

    public function basis_pengetahuans()
    {
        return $this->hasMany(BasisPengetahuan::class);
    }

    public function Diagnosas()
    {
        return $this->hasMany(Diagnosa::class);        
    }
}
