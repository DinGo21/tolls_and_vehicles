<?php

namespace App\Http\Controllers\Api;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VehicleController extends Controller
{
    public function attachToll(Request $request) : void
    {
        $vehicle = Vehicle::find($request->vehicleId);

        $vehicle->tolls()->attach([$request->tollId]);
    }
}
