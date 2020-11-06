<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\House;
use App\Models\Title;

class CharacterController extends Controller
{

    public function characterList() {

        $charact = Character::all();
        $characters = $charact->load(["title", "mother", "father", "house"]);
        return view('layout.homepage', compact('characters'));


    }

    public function findcharacter($id) {

        $character = Character::find($id);
        $detail = $character->load(["title", "mother", "father", "house"]);

        return view('layout.biographie', compact('detail'));

    }

}



