<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('keluargas', function (Blueprint $table) {
            $table->id();

            $table->string('no_kk')->unique();
            $table->string('kepala_keluarga');
            $table->text('alamat');
            $table->string('rt');
            $table->string('rw');
            $table->string('desa');
            $table->string('kecamatan');
            $table->string('kabupaten');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('keluargas');
    }
};