<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Equipment;

class EquipmentSeeder extends Seeder
{
    public function run()
    {
        Equipment::create([
            'alsintan' => 'Traktor Roda 2',
            'type' => 'Yanmar Tf 65 Lys',
            'tahun_terbit' => 2019,
            'hp' => 6.5,
            'kondisi_baik' => 1,
            'kondisi_rusak' => 1,
            'jumlah' => 2,
        ]);

        Equipment::create([
            'alsintan' => 'Traktor Roda 2',
            'type' => 'Yanmar TF 105 ml',
            'tahun_terbit' => null,
            'hp' => 10.5,
            'kondisi_baik' => 4,
            'kondisi_rusak' => 0,
            'jumlah' => 4,
        ]);

        Equipment::create([
            'alsintan' => 'Cultivator',
            'type' => 'Quick',
            'tahun_terbit' => null,
            'hp' => 6.5,
            'kondisi_baik' => 1,
            'kondisi_rusak' => 2,
            'jumlah' => 3,
        ]);

        Equipment::create([
            'alsintan' => 'Cultivator',
            'type' => 'Krisbow',
            'tahun_terbit' => null,
            'hp' => 6,
            'kondisi_baik' => 0,
            'kondisi_rusak' => 2,
            'jumlah' => 2,
        ]);

        Equipment::create([
            'alsintan' => 'Traktor Roda 4',
            'type' => 'Jhon Deere',
            'tahun_terbit' => null,
            'hp' => null,
            'kondisi_baik' => 1,
            'kondisi_rusak' => 0,
            'jumlah' => 1,
        ]);

        Equipment::create([
            'alsintan' => 'Traktor Roda 4',
            'type' => 'Yanmar',
            'tahun_terbit' => null,
            'hp' => null,
            'kondisi_baik' => 1,
            'kondisi_rusak' => 0,
            'jumlah' => 1,
        ]);

        Equipment::create([
            'alsintan' => 'Rice Transplanter',
            'type' => 'Walking Yanmar AP4',
            'tahun_terbit' => null,
            'hp' => null,
            'kondisi_baik' => 1,
            'kondisi_rusak' => 0,
            'jumlah' => 1,
        ]);

        Equipment::create([
            'alsintan' => 'Rice Transplanter',
            'type' => 'Riding Javatech',
            'tahun_terbit' => null,
            'hp' => null,
            'kondisi_baik' => 0,
            'kondisi_rusak' => 1,
            'jumlah' => 1,
        ]);

        Equipment::create([
            'alsintan' => 'Rice Transplanter',
            'type' => 'Riding Gatra',
            'tahun_terbit' => null,
            'hp' => null,
            'kondisi_baik' => 1,
            'kondisi_rusak' => 0,
            'jumlah' => 1,
        ]);

        Equipment::create([
            'alsintan' => 'Rice Transplanter',
            'type' => 'Walking Indo Jarwo (crown)',
            'tahun_terbit' => null,
            'hp' => null,
            'kondisi_baik' => 1,
            'kondisi_rusak' => 2,
            'jumlah' => 3,
        ]);
    }
}
