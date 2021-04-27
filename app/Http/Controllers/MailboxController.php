<?php

namespace App\Http\Controllers;

use App\Models\Mail;
use App\Models\User;
use Illuminate\Http\Request;

class MailboxController extends Controller
{
    public function index(){
        $user = User::all()->first(); 
        $mails = Mail::paginate(10); 

        return view('admin.mailbox.show', compact('user', 'mails')); 
    }


    public function show(Mail $id){
        $user = User::all()->first(); 
        $mail = $id; 
        $mail->lu = 0 ? $mail->lu = 1 : $mail->lu = 0; 
        $mail->save(); 
        return view('admin.mailbox.show', compact('user','mail'));
    }

    public function store(Request $request){
        $mail = new Mail(); 

        foreach($request->all() as $key => $value) {
            if(($key != "_token") && ($key != "_method")){
                $mail->$key = $value; 
            }
        }
        $mail->lu = 0; 
        $mail->save(); 

        return "Message bien envoyé"; 
    }


}
