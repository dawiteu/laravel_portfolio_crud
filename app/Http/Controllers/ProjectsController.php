<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Projects;
use App\Models\User;
use Database\Seeders\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    // titre portfolio en BAS !~


    public function index(){
        $user = User::all()->first(); 
        $portf = Portfolio::all()->first(); 
        $projs = Projects::all(); 

        return view('admin.portfolio.show', compact('projs', 'user', 'portf'));
    }

    public function edit(Projects $id){ 

        $user = User::all()->first(); 
        $proj = $id; 
        
        return view('admin.portfolio.edit', compact('proj', 'user'));
    }

    public function update(Projects $id, request $request){
        $proj = $id; 
        //$title = Portfolio::all()->first(); 
        request()->validate([
            "img"   => ["required"], 
            "link"  => ["required"], 
            "cat"   => ["required"] 
        ]);

        foreach($request->all() as $key => $value) {
            if(($key != "_token") && ($key != "_method")){
                $proj->$key = $value; 
            }
        }

        $proj->save(); 
        return redirect()->route('ad.projects.show')->with("success", "Projet bien modifier.");
    }

    public function create(){
        $user = User::all()->first(); 
        return view('admin.portfolio.add', compact('user'));
    }

    public function store(Request $request){ 
        $proj = new Projects(); 

        request()->validate([
            "img"   => ["required"], 
            "link"  => ["required"], 
            "cat"   => ["required"] 
        ]);

        foreach($request->all() as $key => $value) {
            if(($key != "_token") && ($key != "_method")){
                $proj->$key = $value; 
            }
        }

        $proj->save(); 
        return redirect()->route('ad.projects.show')->with("success", "Projet bien ajouter.");
    }

    public function destroy(Projects $id){
        $id->delete(); 

        return redirect()->route('ad.projects.show'); 
    }


    // portfolio --- pour ne pas devoir faire 2 controlleur pour un simple titre... 

    public function editTitre(){
        $user = User::all()->first(); 
        $titre = Portfolio::all()->first(); 

        return view('admin.portfolio.title', compact('user', 'titre'));
    }

    public function updateTitre(request $request){
        $user = User::all()->first(); 
        $titre = Portfolio::all()->first(); 

        request()->validate([
            "title"  => ["required"],
        ]);

        foreach($request->all() as $key => $value) {
            if(($key != "_token") && ($key != "_method")){
                $titre->$key = $value; 
            }
        }

        $titre->save(); 
        return redirect()->route('ad.projects.show');
    }
}