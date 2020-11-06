<?php

namespace App\Http\Controllers;

use App\Models\House;
use App\Models\House_has_character;

class HouseController extends Controller
{

    public function houseList() {

        $houses = House::all();

        return view('layout.houses', compact('houses'));

    }

    public function findhouse($id) {

        $house = House::find($id);
        $detailhouse = $house->load(['character']);


        return view('layout.house', compact('detailhouse'));

    }

}
