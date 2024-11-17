<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('farmers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('address');
            $table->string('phone_number');
            $table->decimal('land_area', 10, 2); // in hectares
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('farmers');
    }
};