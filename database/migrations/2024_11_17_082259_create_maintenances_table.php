<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('maintenances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('equipment_id')->constrained('equipment')->onDelete('cascade');
            $table->string('description');
            $table->date('maintenance_date');
            $table->decimal('cost', 15, 2)->nullable();
            $table->integer('duration')->nullable(); // Durasi dalam hari
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('maintenances');
    }
};
