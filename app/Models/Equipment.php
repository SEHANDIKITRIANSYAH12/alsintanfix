<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;

    // Nama tabel (jika berbeda dari plural model)
    protected $table = 'equipment';

    // Kolom yang bisa diisi secara massal (mass assignment)
    protected $fillable = [
        'alsintan', 
        'type', 
        'tahun_terbit', 
        'hp', 
        'kondisi_baik', 
        'kondisi_rusak', 
    ];

    // Menonaktifkan timestamp jika tidak ada kolom created_at dan updated_at
    public $timestamps = false;

    // Contoh relasi dengan model lain (jika ada)
    public function maintenances()
    {
        return $this->hasMany(Maintenance::class);
    }
}
