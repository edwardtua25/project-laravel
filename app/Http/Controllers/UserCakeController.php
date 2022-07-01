<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserCakeController extends Controller
{
    public function index(){
        $cake = DB::table('cake')->latest('id')->paginate(30);
        return view('usercake')->with(['cake'=>$cake]);

    }
    public function index01(){
        return view('usercake');
    }
}
