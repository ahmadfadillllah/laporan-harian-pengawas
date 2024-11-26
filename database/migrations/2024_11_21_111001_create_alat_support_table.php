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
        Schema::create('alat_support', function (Blueprint $table) {
            $table->id();
            $table->integer('daily_report_id');
            $table->string('jenis_unit')->nullable();
            $table->string('alat_unit')->nullable();
            $table->string('nik_operator')->nullable();
            $table->string('nama_operator')->nullable();
            $table->date('tanggal_operator')->nullable();
            $table->string('shift_operator')->nullable();
            $table->decimal('hm_awal')->nullable();
            $table->decimal('hm_akhir')->nullable();
            $table->decimal('hm_total')->nullable();
            $table->string('hm_cash')->nullable();
            $table->string('material')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alat_support');
    }
};
