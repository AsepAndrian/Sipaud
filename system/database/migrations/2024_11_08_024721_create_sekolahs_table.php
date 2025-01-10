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
        Schema::create('sekolahs', function (Blueprint $table) {
            $table->id();
            $table->integer('nomor')->nullable(); // Atau sesuaikan sesuai kebutuhan
            $table->string('nama_sekolah');
            $table->string('npsn')->unique();
            $table->string('email')->unique();
            $table->string('alamat_lengkap');
            $table->string('telepon_sekolah'); 
            $table->string('kepalaq_sekolah')->nullable();
            $table->string('status_sekolah')->nullable(); // Contoh: Negeri, Swasta
            $table->integer('jumlah_guru')->nullable();
            $table->integer('jumlah_siswa')->nullable();
            $table->year('tahun_berdiri')->nullable();
            $table->string('foto_sekolah')->nullable(); // Path atau URL ke foto sekolah
            $table->string('logo_sekolah')->nullable(); // Path atau URL ke logo sekolah
            $table->string('password')->nullable(); // Password di-enkripsi jika diperlukan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sekolahs', function (Blueprint $table) {
            $table->dropColumn('nomor');
        });
    }
};
