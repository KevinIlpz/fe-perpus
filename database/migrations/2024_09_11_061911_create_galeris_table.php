<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('galeris', function (Blueprint $table) {
            $table->id();
            $table->string('file', 200);
            $table->unsignedBigInteger('kategori_id');
            $table->string('keterangan', 255);
            $table->integer('oleh');
            $table->dateTime('tgl');
            $table->timestamps();

            // $table->foreign('kategori')->references('id')->on('galeri_kategoris');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galeris');
    }
};
