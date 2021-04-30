<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function edit(Page $id){
        
        $user = User::all()->first(); 
        $page = $id;
        return view('admin.pages.edit', compact('user','page'));
    }

    public function update(Page $id, Request $request){
        $page = $id; 

        request()->validate([
            "description"  => ["required"],
        ]);

        foreach($request->all() as $key => $value) {
            if(($key != "_token") && ($key != "_method") && ($key != "name")){ // le name par mesure de securité... 
                $page->$key = $value; 
            }
        }

        $page->save();
        return redirect()->route('admin.home'); 
    }
}
