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
        Schema::create('tbl_users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('nim');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('fakultas');
            $table->string('jurusan');
            $table->string('prodi');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('no_hp');
            $table->string('jumlah_tes');
            $table->string('nama_lenbaga');
            $table->string('jenjang_pendidikan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_users');
    }
};
