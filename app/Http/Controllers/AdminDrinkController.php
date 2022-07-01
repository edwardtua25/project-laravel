<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminDrinkController extends Controller
{
    public function index(){
    $drink =  DB::table('drink')->latest('id')->paginate(5);
    return view('contact.admindrink')->with(['drink'=>$drink]);
    }

    public function index01(){
        return view('contact.admindrink');
    }

}
