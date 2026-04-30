<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table='buku';
    // inisialisasi kolom yang dapat diisi
    protected $fillable = ['judul','penulis','tahunterbit','harga', 'kode_buku'];
    //inisialisasi PK
    // protected $primaryKey = 'id'; 

    // inisialisasi kolom yang tidak boleh diisi
    // protected $guarded = [];
}
