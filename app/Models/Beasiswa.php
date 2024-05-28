<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beasiswa extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'beasiswa';

    protected $fillable = [
        'nama_mahasiswa', 'penghasilan', 'nilai_penghasilan', 'usia', 'nilai_usia', 'tanggungan', 'nilai_tanggungan', 'semester', 'nilai_semester', 'ipk', 'nilai_ipk'
    ];
}
