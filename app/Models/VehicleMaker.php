<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleMaker extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'display',
    ];

    // Relationship with VehicleModel
    public function models()
    {
        return $this->hasMany(VehicleModel::class);
    }
}
