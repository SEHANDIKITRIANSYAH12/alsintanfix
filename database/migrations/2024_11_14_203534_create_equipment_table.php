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
        Schema::create('equipment', function (Blueprint $table) {
            $table->id();
            $table->string('alsintan');
            $table->string('type')->nullable();
            $table->year('tahun_terbit')->nullable();
            $table->float('hp')->nullable();
            $table->integer('kondisi_baik')->default(0);
            $table->integer('kondisi_rusak')->default(0);
            $table->integer('jumlah')->default(0);
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.  
     */
    public function down(): void
    {
        Schema::dropIfExists('equipment');
    }
};
