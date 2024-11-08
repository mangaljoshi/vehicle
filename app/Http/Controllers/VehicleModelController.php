<?php

namespace App\Http\Controllers;

use App\Models\VehicleModel;

class VehicleModelController extends Controller
{
    public function index()
    {
        $vehicleModels = VehicleModel::all(); // Ya phir paginate() use karein agar zyada data hai
        return view('vehicle.models', compact('vehicleModels'));
    }
}
