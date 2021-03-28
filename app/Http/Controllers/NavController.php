<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;
use App\Models\Cartoonist;


class NavController extends Controller{

    
    public function home(){
        return view ('home');
    }

    public function listCharacter(){
        $characters=Character::all();
        $cartoonist = Cartoonist::all();
        return view('listCharacter', ['characters'=>$characters,'cartoonist' => $cartoonist]);
    }
    public function listCartoonist(){
        $cartoonists=Cartoonist::all();
        return view('listCartoonist', ['cartoonists'=>$cartoonists]);
    }

    public function addCharacter(){
        $cartoonists=Cartoonist::all()->sortBy('name');
        return view('addCharacter', ['cartoonists'=>$cartoonists]);
    }
    public function addCartoonist(){
        return view('addCartoonist');
    }

    public function editCharacter($id){
        $character=Character::findOrFail($id);
        $cartoonists=Cartoonist::all()->sortBy('name');
        return view ('editCharacter', ['cartoonists'=>$cartoonists, 'character'=>$character]);
    }
    public function editCartoonist($id){
        $cartoonist=Cartoonist::findOrFail($id);
        return view ('editCartoonist', ['cartoonist'=>$cartoonist]);
    }
  

}