<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use illuminate\Database\QueryException;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('apoteks', function (Blueprint $table) {
           $table->id();
            $table->string('ID_Apotek');
            $table->string('ID_Apoteker');
            $table->string('Nama_Apotek');
            $table->string('Lokasi');
            $table->string('Jam_Buka');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apoteks');
    }
};
