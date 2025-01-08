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
        Schema::create('bulan_pembayarans', function (Blueprint $table) {
            $table->id();
            $table->integer('tahun');
            $table->enum('bulan', ['januari', 'Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bulan_pembayarans');
    }
};
