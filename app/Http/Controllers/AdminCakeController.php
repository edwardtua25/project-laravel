<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminCakeController extends Controller
{
    public function index(){
        $cake =  DB::table('cake')->latest('id')->paginate(5);
        return view('contact.admincake')->with(['cake'=>$cake]);

    }
    public function index01(){
        return view('contact.admincake');
    }
}
