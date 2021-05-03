<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Projects;
use App\Models\User;
use Database\Seeders\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectsController extends Controller
{
    // titre portfolio en BAS !~


    public function index(){
        $user = User::all()->first(); 
        $portf = Portfolio::all()->first(); 
        $projs = Projects::paginate(10); 

        return view('admin.portfolio.show', compact('projs', 'user', 'portf'));
    }

    public function edit(Projects $id){ 

        $user = User::all()->first(); 
        $proj = $id; 
        
        return view('admin.portfolio.edit', compact('proj', 'user'));
    }

    public function update(Projects $id, Request $request){
        $proj = $id; 
        //$title = Portfolio::all()->first(); 
        request()->validate([
            "img"   => ["nullable","mimes:jpeg,jpg,png,gif","max:10000"], 
            "link"  => ["required"], 
            "cat"   => ["required"] 
        ]);

        foreach($request->all() as $key => $value) {
            if(($key != "_token") && ($key != "_method")){
                $proj->$key = $value; 
            }
        }

        if($request->hasFile('img')){
            Storage::delete("storage/img/upload/".$proj->img);
            Storage::put("public/img/upload/", $request->file('img'));
            $proj->img = $request->file('img')->hashName(); 
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
            "img"   => ["mimes:jpeg,jpg,png,gif","max:10000"],
            "link"  => ["required"], 
            "cat"   => ["required"] 
        ]);

        foreach($request->all() as $key => $value) {
            if(($key != "_token") && ($key != "_method") && ($key != "img")){
                $proj->$key = $value; 
            }
        }

        if($request->hasFile('img')){
            Storage::delete("storage/img/upload/".$proj->img);
            Storage::put("public/img/upload/", $request->file('img'));
            $proj->img = $request->file('img')->hashName(); 
        }

        $proj->save(); 
        return redirect()->route('ad.projects.show')->with("success", "Projet bien ajouté.");
    }

    public function destroy(Projects $id){
        $id->delete(); 

        return redirect()->route('ad.projects.show'); 
    }


}
