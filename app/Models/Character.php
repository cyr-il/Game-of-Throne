<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Character extends Model

{
    public function house() {

        
        return $this->hasManyThrough(
            "App\Models\House",
            "App\Models\House_has_character",
            "character",
            "id",
            "id",
            "house",
            );

    }

    public function title() {

        return $this->belongsTo("App\Models\Title","id_title");

    }

    public function mother() {

        return $this->belongsTo("App\Models\Character","mother_id");

    }


    public function father() {

        return $this->belongsTo("App\Models\Character","father_id");

    }

}
