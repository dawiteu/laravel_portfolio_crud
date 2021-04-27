<?php

namespace App\Http\Controllers;

use App\Models\Fact;
use App\Models\User;
use Illuminate\Http\Request;

class FactsController extends Controller
{
    public function index(){
        $user = User::all()->first(); 
        $facts = Fact::all(); 

        return view('admin.facts.show', compact('facts', 'user'));
    }

    public function edit(Fact $id){
        $user = User::all()->first(); 
        $fact = $id;  
        
        return view('admin.facts.edit', compact('fact', 'user'));
    }

    public function update(Fact $id, request $request){
        $fact = $id; 
        
        request()->validate([
            "title"   => ["required"],
            "icon"   => ["required"],
            "desc"   => ["required"],
            "value"  => ["required", "numeric"]
        ]);

        foreach($request->all() as $key => $value) {
            if(($key != "_token") && ($key != "_method")){
                $fact->$key = $value; 
            }
        }

        $fact->save(); 
        return redirect()->route('ad.facts.show');
    }


}
