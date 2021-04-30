<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        $user  = User::all()->first();
        $services = Service::all(); 

        return view('admin.services.show', compact('user','services'));
    }

    public function edit(Service $id){
        $user  = User::all()->first();
        $serv = $id; 
        return view('admin.services.edit', compact('serv','user'));
    }

    public function create(){
        $user  = User::all()->first();
        return view('admin.services.add', compact('user')); 
    }

    public function store(){
        // store; 
    }

    public function update(Service $id, Request $request){ 
        $serv = $id; 

        request()->validate([
            "icon"   => ["required"], 
            "title"  => ["required"], 
            "desc"   => ["required"] 
        ]); 

        foreach($request->all() as $key => $value) {
            if(($key != "_token") && ($key != "_method")){
                $serv->$key = $value; 
            }
        }
        
        $serv->save(); 
        return redirect()->route('ad.services.show')->with('success','Service bien modifié'); 
    }
}
