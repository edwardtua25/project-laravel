<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminFoodController extends Controller
{
    public function index(){
        $makanan =  DB::table('food')->latest('id')->paginate(5);
        return view('contact.adminfood')->with(['makanan'=>$makanan]);
    }
    public function index01(){
        return view('contact.adminfood');
    }
}
