<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $user = User::all()->first(); 
        $cont = Contact::all(); 

        return view('admin.contact.show', compact('user', 'cont'));
    }

    public function edit(Contact $id){
        $user = User::all()->first(); 
        $cont = $id; 

        return view('admin.contact.edit', compact('user', 'cont'));
    }

    public function update(Contact $id, request $request){
        $cont = $id; 

        foreach($request->all() as $key => $value) {
            if(($key != "_token") && ($key != "_method")){
                $cont->$key = $value; 
            }
        }
        $cont->save(); 

        return redirect()->route('ad.contact.show');
    }
}
