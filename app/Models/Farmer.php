<?php

// app/Models/Farmer.php

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
    ];

    // Relasi ke model Usage
    public function usages()
    {
        return $this->hasMany(Usage::class);
    }
}
