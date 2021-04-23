<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Fact;
use App\Models\Portfolio;
use App\Models\Projects;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        //about 
        $about = About::all(); 
        $user  = User::all()->first(); 

        //facts: 
        $facts = Fact::all()->first();  

        //skills
        $skills = Skill::all()->first(); 

        //portfolio: 
        $portfolio = Portfolio::all()->first(); 
        $projects = Projects::all(); 
        return view('index', compact('about', 'user','facts','skills', 'portfolio', 'projects')); 
    }
}
