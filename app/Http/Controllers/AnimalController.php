<?php

namespace App\Http\Controllers;
use App\Models\Animal;

class AnimalController extends Controller
{
    public function create() {
        Animal::create([
            'name' => "Coquillette",
            'species' => "Chien",
            'age' => 3,
            'description' => "Une Shiba Inu vive et joyeuse, toujours prête à jouer et à explorer. Coquillette est curieuse, intelligente et très expressive, avec un petit caractère indépendant mais plein de tendresse pour ceux qu'elle aime.",
            'photo' => "coquillette.png"
        ]);
        $animals = Animal::all();
        return view('welcome', ["animals" => $animals]);
    }
}
