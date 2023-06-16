<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerawatanTable extends Migration
{
    public function up()
    {
        Schema::create('perawatan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_part');
            $table->text('perawatan');
            $table->string('gambar')->nullable(); // Menambahkan kolom gambar, yang dapat bernilai null
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('perawatan');
    }
}

