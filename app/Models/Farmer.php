<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farmer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'phone_number',
        'land_area',
    ];

    // Relasi ke model Usage
    public function usages()
    {
        return $this->hasMany(Usage::class);
    }
}