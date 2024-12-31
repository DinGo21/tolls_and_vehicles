<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [
        "toll_id",
        "type",
        "registration"
    ];

    public function toll()
    {
        return $this->belongsTo(Toll::class);
    }
}
