<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    public function character()
    {
    return $this->hasManyThrough(
        "App\Models\Character",
        "App\Models\House_has_character",
        "house",
        "id",
        "id",
        "character",
        );
    }
}
