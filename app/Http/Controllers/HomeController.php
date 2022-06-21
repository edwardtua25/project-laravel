<?php

namespace App\Http\Controllers;

use App\Models\Gambar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        
        $menu = DB::table('gambar')->latest('id')->get();
        
        return view('home',compact('menu'));
    }
   
}
