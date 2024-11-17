<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    use HasFactory;

    protected $fillable = [
        'equipment_id',
        'description',
        'maintenance_date',
        'cost',
        'duration',
        'status'
    ];

    public function equipment()
    {
        return $this->belongsTo(Equipment::class);
    }
}
