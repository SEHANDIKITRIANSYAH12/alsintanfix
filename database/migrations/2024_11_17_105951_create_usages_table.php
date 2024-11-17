<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/xxxx_xx_xx_create_usages_table.php

// database/migrations/xxxx_xx_xx_create_usages_table.php

public function up()
{
    Schema::create('usages', function (Blueprint $table) {
        $table->id();
        $table->foreignId('equipment_id')->constrained('equipment'); // Relasi ke tabel alat
        $table->foreignId('farmer_id')->constrained('farmers'); // Relasi ke tabel farmers
        $table->date('usage_date');
        $table->decimal('duration', 8, 2); // Durasi penggunaan
        $table->decimal('area', 8, 2); // Luas area yang dikerjakan
        $table->string('result'); // Hasil pertanian
        $table->enum('status', ['pending', 'confirmed'])->default('pending'); // Status konfirmasi
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
