<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserFoodController extends Controller
{
    public function index(){
        $makanan = DB::table('food')->latest('id')->paginate(30);
        return view('userfood')->with(['makanan'=>$makanan]);
        
    }
    public function index01(){
        return view('userfood');
    }
}
