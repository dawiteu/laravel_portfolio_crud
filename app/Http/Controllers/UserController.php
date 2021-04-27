<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $user = User::all()->first();

        return view('admin.pers.show', compact('user')); 
    }

    public function edit(){
        $user = User::all()->first(); 
        //$date1 = explode("-", $user->date); 
        //$date = "".$date1[2]."-".$date1[1]."-".$date1[0]."";
        //dd($date1); 
        return view('admin.pers.edit', compact('user')); 
    }

    public function update(Request $request){
        $user = User::all()->first();  

        request()->validate([
            "prenom"   => ["required"],
            "nom"   => ["required"],
            "email"   => ["required", "email"],
            "tel"   => ["required"],
            "website"   => ["required"],
            "degree"   => ["required"],
            "city"   => ["required"],
            "freelance"   => ["required"],
        ]);
        foreach($request->all() as $key => $value) {
            if(($key != "_token") && ($key != "_method")){
                $user->$key = $value; 
            }
        }

        $user->save(); 

        return redirect()->route('ad.infop.show')->with('success','Modification bien enregistrée');
    }
}
