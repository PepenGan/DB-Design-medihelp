<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class konsumen extends Model
{
    use HasFactory;
    protected $fillable = ['Nama_Konsumen','Umur_Konsumen','Alamat_Konsumen','phone_Konsumen'];
}
