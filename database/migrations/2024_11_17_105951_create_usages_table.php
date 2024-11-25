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
        Schema::create('usages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('equipment_id')->constrained('equipment'); // Relasi ke tabel equipment
            $table->foreignId('farmer_id')->constrained('farmers'); // Relasi ke tabel farmers
            $table->date('usage_date'); // Tanggal penggunaan alat
            $table->decimal('duration', 10, 2); // Durasi penggunaan (max: 99999999.99 jam)
            $table->decimal('area', 10, 2); // Luas area yang dikerjakan (max: 99999999.99 ha)
            $table->string('result'); // Hasil pertanian
            $table->string('status')->default('pending'); // Status konfirmasi (pending/confirmed)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usages');
    }
};
