<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cartoonist;

class CartoonistController extends Controller
{
    public function create(Request $request){
        $cartoonist= new Cartoonist; 
        $cartoonist->name= $request->name;
        $cartoonist->birth_year= $request->birth_year;
        $cartoonist->nationality= $request->nationality;
        $cartoonist->save();
        return redirect('/listCartoonist');
    }

    public function edit(Request $request){
        $cartoonist= Cartoonist::findOrFail($request->id);
        $cartoonist->name= $request->name;
        $cartoonist->birth_year= $request->birth_year;
        $cartoonist->nationality= $request->nationality;
        $cartoonist->save();
        return redirect('/listCartoonist');   
    }

    public function delete(Request $request){
        $cartoonist= Cartoonist::findOrFail($request->id);
        $cartoonist->delete();
        return redirect('/listCartoonist');
    }
}
