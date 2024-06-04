<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\QueryException;
class apotek extends Model
{
    use HasFactory;
    protected $fillable = ['ID_Apotek','ID_Apoteker','Nama_Apotek','Lokasi','Jam_Buka',];
}
