<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Toll extends Model
{
    protected $fillable = [
        "name",
        "city",
        "earned"
    ];

    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }
}
