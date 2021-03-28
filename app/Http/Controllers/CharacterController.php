<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;

class CharacterController extends Controller
{
    
    public function create(Request $request)
    {
        $character= new Character;
        $character->name=$request->name;
        $character->cartoonist_id=$request->cartoonist_id;
        $character->comic=$request->comic;
        $character->creation_year=$request->creation_year;
        $character->save();
        return redirect('/listCharacter');
    }

    public function edit(Request $request){
        $character= Character::findOrFail($request->id);
        $character->name=$request->name;
        $character->cartoonist=$request->cartoonist;
        $character->comic=$request->comic;
        $character->creation_year=$request->creation_year;
        $character->save();
        return redirect('/listCharacter');   
    }

    public function delete(Request $request){
        $character= Character::findorFail($request->id);
        $character->delete();
        return redirect('/listCharacter');
    }


}
