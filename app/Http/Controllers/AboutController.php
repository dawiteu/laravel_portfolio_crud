<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\User;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $user = User::all()->first(); 
        $abouts = About::all(); 
        return view('admin.about.show', compact('user', 'abouts')); 
    }

    public function edit(){
        $user = User::all()->first(); 
        $abouts = About::all()->first();
        $date1 = explode("-", $user->date); 
        $date = "".$date1[2]."-".$date1[1]."-".$date1[0]."";
        return view('admin.about.edit', compact('user', 'abouts', 'date')); 
    }

    public function update(request $request){
        $about = About::all()->first(); 

        foreach($request->all() as $key => $value) {
            if(($key != "_token") && ($key != "_method")){
                $about->$key = $value; 
            }
        }

        $about->save(); 
        return redirect()->route('ad.about.show');
    }
}
