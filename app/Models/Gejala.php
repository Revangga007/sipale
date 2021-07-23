<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gejala extends Model
{
    use HasFactory;

    protected $table = 'gejala';

    protected $fillable = [
        'kode', 'nama'
    ];

    public function basis_pengetahuan()
    {
        return $this->hasMany(BasisPengetahuan::class);
    }
}
