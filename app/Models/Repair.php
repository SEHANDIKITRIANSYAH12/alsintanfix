<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repair extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_alat', 
        'tanggal_perbaikan', 
        'kebutuhan_perbaikan', 
        'deskripsi_perbaikan'
    ];
}
