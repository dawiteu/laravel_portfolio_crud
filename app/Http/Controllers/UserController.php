<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index(){
        $user = User::all()->first();
        $date1 = explode("-",$user->date);  
        $date = $date1[2]."/".$date1[1]."/".$date1[0]; 
        return view('admin.pers.show', compact('user', 'date')); 
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
            "website"   => ["required"],
            "degree"   => ["required"],
            "city"   => ["required"],
            "freelance"   => ["required"],
            "fileimg"    => ["mimes:jpeg,jpg,png,gif","max:10000"]
            // "fileimg"    => ["required_if:actimg,null"],
        ]);

        //dd($request->all()); 
        $path = "storage/img/upload/"; 

        if($request->hasFile('fileimg')){
            //dd('un fichier passe');
            //dd($path); 
            Storage::delete($path."".$user->img);
            Storage::put("public/img/upload/", $request->file('fileimg'));
            $user->img = $request->file('fileimg')->hashName(); 
        }

        foreach($request->all() as $key => $value) {
            if(($key != "_token") && ($key != "_method") && ($key != "img") && ($key != "actimg") && ($key != "fileimg")){
                $user->$key = $value; 
            }
        }

        $user->save(); 

        return redirect()->route('ad.infop.show')->with('success','Modification bien enregistrée');
    }
}
