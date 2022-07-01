<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserDrinkController extends Controller
{
    public function index(){
        $drink = DB::table('drink')->latest('id')->paginate(30);
        return view('userdrink')->with(['drink'=>$drink]);
        
    }
    public function index01(){
        return view('userdrink');
    }
}
