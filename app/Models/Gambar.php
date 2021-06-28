<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gambar extends Model
{
    protected $table = "baju";
 
    protected $fillable = ['id','kode_baju','nama_baju','harga','deskripsi','file','stok'];
}
