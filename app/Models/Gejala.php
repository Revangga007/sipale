<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gejala extends Model
{
    use HasFactory;

    protected $table = 'gejala';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'id', 'nama'
    ];

    public function basis_pengetahuans()
    {
        return $this->hasMany(BasisPengetahuan::class);
    }
}
