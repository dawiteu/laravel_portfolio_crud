<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index(){
        
        $user = User::all()->first(); 
        $skills = Skill::all(); 

        return view('admin.skills.show', compact('user','skills')); 
    }

    public function edit(Skill $id){
        $user = User::all()->first(); 
        $skill = $id; 
        return view('admin.skills.edit', compact('user','skill')); 
    }

    public function update(Skill $id, Request $request){
        $skill = $id; 
        
        request()->validate([
            "technologie"  => ["required"],
            "value"        => ["required", "numeric"],
        ]);

        foreach($request->all() as $key => $value) {
            if(($key != "_token") && ($key != "_method")){
                $skill->$key = $value; 
            }
        }

        $skill->save(); 
        return redirect()->route('ad.skills.show')->with('success','Skill updaté.'); 
    }

    public function create(){
        $user = User::all()->first(); 
        return view('admin.skills.add', compact('user')); 
    }

    public function store(Request $request){
        $skill = new Skill(); 

        request()->validate([
            "technologie"  => ["required"],
            "value"        => ["required", "numeric"],
        ]);

        foreach($request->all() as $key => $value) {
            if(($key != "_token") && ($key != "_method")){
                $skill->$key = $value; 
            }
        }        
        $skill->save(); 
        return redirect()->route('ad.skills.show')->with('success','Skill ajouté.'); 
    }

    public function destroy(Skill $id){
        $id->delete();
        return redirect()->route('ad.skills.show')->with('success','Skill supprimé.'); 
    }
}
