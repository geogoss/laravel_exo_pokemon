<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{

    function index () {
        $pokemon = Pokemon::all();
        return view('pages.pokemon', compact('pokemon'));
    }

    function create () {
        return view('pages.createPokemon');
    }

    function store (Request $request) {
        $store = new Pokemon();
        $store->name = $request->name;
        $store->type = $request->type;
        $store->level = $request->level;
        $store->save();
        // la ligne qui suit c'est pour faire intervenir le débugger comme un console.log
        dd($request->name, $request->type, $request->level);

        // la ligne qui suit c'est juste pour rediriger
        // return redirect('/pokemon');

        // autre façon
        // dd($store); ou dd($request->all())

        
    }

}

