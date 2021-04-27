<?php

namespace App\Http\Controllers;

use App\Models\Fact;
use App\Models\User;
use Illuminate\Http\Request;

class FactsController extends Controller
{
    public function index(){
        $user = User::all()->first(); 
        $facts = Fact::all()->first(); 

        return view('admin.facts.show', compact('facts', 'user'));
    }

    public function edit(){
        $user = User::all()->first(); 
        $fact = Fact::all()->first(); 
        
        return view('admin.facts.edit', compact('fact', 'user'));
    }

    public function update(request $request){
        $fact = Fact::all()->first(); 

        foreach($request->all() as $key => $value) {
            if(($key != "_token") && ($key != "_method")){
                $fact->$key = $value; 
            }
        }

        $fact->save(); 
        return redirect()->route('ad.facts.show');
    }
}
