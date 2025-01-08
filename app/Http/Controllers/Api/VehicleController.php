<?php

namespace App\Http\Controllers\Api;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VehicleController extends Controller
{
    public function attachToll(Request $request)
    {
        return response()->json(["attach" => $request->attach], 200);
    }

    public function store(Request $request)
    {
        $vehicle = Vehicle::create([
            "type" => $request->type,
            "registration" => $request->registration,
            "spent" => 0
        ]);
        
        return response()->json($vehicle, 200);
    }
}
