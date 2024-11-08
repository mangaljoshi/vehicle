<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'display',
        'vehicle_maker_id',
    ];

    // Relationship with VehicleMaker
    public function maker()
    {
        return $this->belongsTo(VehicleMaker::class);
    }
}
