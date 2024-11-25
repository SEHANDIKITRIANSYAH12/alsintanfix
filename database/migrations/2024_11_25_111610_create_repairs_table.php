<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('repairs', function (Blueprint $table) {
        $table->id();
        $table->string('nama_alat');
        $table->date('tanggal_perbaikan');
        $table->string('kebutuhan_perbaikan');
        $table->text('deskripsi_perbaikan')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('repairs');
    }
};
