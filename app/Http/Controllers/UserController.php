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
        $date1 = explode("-", $user->date); 
        $date = "".$date1[2]."-".$date1[1]."-".$date1[0]."";
        return view('admin.pers.edit', compact('user', 'date')); 
    }

    public function update(Request $request){
        $user = User::all()->first();  

        foreach($request->all() as $key => $value) {
            if(($key != "_token") && ($key != "_method")){
                $user->$key = $value; 
            }
        }

        $user->save(); 

        return redirect()->route('ad.infop.show');
    }
}
