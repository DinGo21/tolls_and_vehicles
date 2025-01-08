<?php

namespace App\Models;

use App\Models\VehicleType;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [
        "type",
        "registration",
        "spent"
    ];

    public function vehicleType()
    {
        return $this->belongsTo(VehicleType::class);
    }

    public function tolls()
    {
        return $this->belongsToMany(Toll::class, "toll_vehicle");
    }
}
