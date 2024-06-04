<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsultan extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'deskripsi'];

    public function konsultasis()
    {
        return $this->hasMany(Konsultasi::class);
    }
}
