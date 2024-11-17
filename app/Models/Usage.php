<?php

// app/Models/Usage.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usage extends Model
{
    use HasFactory;

    protected $fillable = [
        'equipment_id',
        'farmer_id',
        'usage_date',
        'duration',
        'area',
        'result',
        'status',
    ];

    // Relasi ke model Farmer
    public function farmer()
    {
        return $this->belongsTo(Farmer::class);
    }

    // Relasi ke model Equipment
    public function equipment()
    {
        return $this->belongsTo(Equipment::class);
    }
}
