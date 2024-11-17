<?php

// database/migrations/xxxx_xx_xx_create_farmers_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFarmersTable extends Migration
{
    public function up()
    {
        Schema::create('farmers', function (Blueprint $table) {
            $table->id();
            $table->string('name');  // Nama petani
            $table->string('address');  // Alamat petani
            $table->string('phone_number');  // Nomor telepon petani
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('farmers');
    }
}
