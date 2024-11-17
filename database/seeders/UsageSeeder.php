<?php

namespace Database\Seeders;

// database/seeders/UsageSeeder.php

use App\Models\Usage;
use Illuminate\Database\Seeder;

class UsageSeeder extends Seeder
{
    public function run()
    {
        Usage::create([
            'equipment_id' => 1, // ID alat
            'farmer_id' => 1, // ID petani
            'usage_date' => '2024-11-17',
            'duration' => 3.5, // Durasi pemakaian dalam jam
            'area' => 1.5, // Luas area dalam hektar
            'result' => 'Padi', // Hasil pertanian
            'status' => 'pending', // Status
        ]);
    }
}
