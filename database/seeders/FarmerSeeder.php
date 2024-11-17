<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Farmer;

class FarmerSeeder extends Seeder
{
    public function run()
    {
        $farmers = [
            [
                'name' => 'Budi Santoso',
                'address' => 'Jl. Raya Padi No. 123, Desa Subur, Kecamatan Makmur',
                'phone_number' => '081234567890',
                'land_area' => 2.5,
            ],
            [
                'name' => 'Siti Rahayu',
                'address' => 'Jl. Sawah Indah No. 45, Desa Sejahtera, Kecamatan Bahagia',
                'phone_number' => '087654321098',
                'land_area' => 1.8,
            ],
            [
                'name' => 'Agus Wijaya',
                'address' => 'Jl. Tanaman Pangan No. 67, Desa Lestari, Kecamatan Sentosa',
                'phone_number' => '089876543210',
                'land_area' => 3.2,
            ],
        ];

        foreach ($farmers as $farmer) {
            Farmer::create($farmer);
        }
    }
}