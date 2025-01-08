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
        Schema::create('uang_kasses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('siswa_id'); // Menggunakan unsignedBigInteger untuk konsistensi
            $table->unsignedBigInteger('bulan_id'); // Menggunakan unsignedBigInteger untuk konsistensi
            $table->decimal('bayar', 10, 2);
            $table->timestamps();
            
            $table->foreign('siswa_id')->references('id')->on('siswas')
                ->onDelete('no action')
                ->onUpdate('no action');
            $table->foreign('bulan_id')->references('id')->on('bulan_pembayarans')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uang_kasses');
    }
};
