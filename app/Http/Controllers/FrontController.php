<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Fact;
use App\Models\Page;
use App\Models\Portfolio;
use App\Models\Projects;
use App\Models\Service;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $user  = User::all()->first();
        $date1 = explode("-",$user->date);  
        $date = $date1[2]."/".$date1[1]."/".$date1[0]; 

        //about 
        $about = Page::all()->where('name','About')->first(); 

        //facts: 
        $fact = Page::all()->where('name','Facts')->first();  //Fact::all()->first();  
        $facts = Fact::all(); 

        
        //skills
        $skill = Page::all()->where('name','Skills')->first();
        $skills = Skill::all(); 

        //services: 
        $servi = Page::all()->where('name','Services')->first(); 
        $services = Service::paginate(6); //Service::all();

        //testimontials: 
        $tests = Page::all()->where('name', 'Testimontials')->first(); 

        //portfolio: 
        $portfolio = Page::all()->where('name','Portfolio')->first(); //Portfolio::all()->first(); 
        $projects = Projects::all(); 

                    //skills: 
                    //$skill = Page::all()->where('name', 'Skills'); 
                    //$skills = Skill::all(); 

        //contact: 

        $contact = Page::all()->where('name', 'Contact')->first();  //Contact::all()->first(); 
        $conts = Contact::all();
        return view('index', compact('about', 'user','fact','facts','skill','skills','servi','services','tests', 'portfolio', 'projects', 'contact','conts', 'date')); 
    }

    public function portfoliodet(){
        
        $user  = User::all()->first(); 
        return view('portfoliodetail', compact('user'));
    }
}
