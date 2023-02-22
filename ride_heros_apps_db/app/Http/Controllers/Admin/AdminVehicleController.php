<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class AdminVehicleController extends Controller
{
    // getting the vehicles from the database
    public function getVehicles()
    {
        $allVehicles = Vehicle::all();
        return response([
            'status' => 200,
            'allVehicles' => $allVehicles
        ]);
    }
}
