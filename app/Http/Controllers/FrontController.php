<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Personalinfo;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $about = About::all(); 
        $persi = Personalinfo::all(); 
        
        return view('index', compact('about', 'persi')); 
    }
}
