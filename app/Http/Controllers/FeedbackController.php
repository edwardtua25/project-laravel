<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Http\Requests\StoreFeedbackRequest;
use App\Http\Requests\UpdateFeedbackRequest;


class FeedbackController extends Controller
{
    public function index()
    {
        $pesan  = Feedback::all();
       return view ('contact.admin', compact('pesan'));
    //    return view('contact.admin')->with('pesan', $pesan);

        
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {  
        // dd($request->all());

        $request->validate([
            'username'=>'max:255',
            'subjek'=> 'max:120'
            
        ]);
      
        $newFeedback = new Feedback; 
        $newFeedback->username=$request->username;     
        $newFeedback->subjek=$request->subjek;
        $newFeedback->save();
        return redirect('/home')->with('success',"Feedback telah Terkirim!!");
    }

    public function show(Feedback $feedback)
    {
        //
    }

    public function edit(Feedback $feedback)
    {
        //
    }

    public function update(Request $request, Feedback $feedback)
    {
        //
    }

        public function deletefeedback($id)
        {
           Feedback::destroy($id);
            return redirect()->intended('admin-feedback')->with('flash_message', 'Data ini akan dihapus?');  
        }
    }

