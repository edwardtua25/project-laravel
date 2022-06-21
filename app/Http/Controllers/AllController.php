<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class AllController extends Controller
{
    public function index3(){
        return view('home');

    }
    public function feedback(Request $request){
        $request->validate([
            'username'=>'max:255',
            'subjek'=> 'max:120'
            
        ]);

        $newFeedback = new Feedback; 
        $newFeedback->username->$request->username;     
        $newFeedback->subjek->$request->subjek;
        

        $newFeedback->save();
        return redirect('/home')->with('success',"Feedback telah Terkirim!!");
    
    }
    
    public function index4(){
        return view('contact', ['title' => 'CONTATC']);
    }

    public function index5(){
        return view('menu', ['title' => 'M E N U']);
    }

    public function index6(){
        return view('tentang', ['title' => 'A B O U T']);
    }

   

}
