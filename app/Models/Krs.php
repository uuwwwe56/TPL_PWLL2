<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Krs extends Model
{
    protected $table = 'krs';
    use HasFactory;
    protected $fillable = ['npm','kode_matakuliah'];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'npm', 'npm');
    }

    public function matakuliah()
    {
        return $this->belongsTo(Matakuliah::class, 'kode_matakuliah', 'kode_matakuliah');
    }
    
    }
