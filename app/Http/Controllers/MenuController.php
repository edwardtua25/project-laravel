<?php

namespace App\Http\Controllers;

use App\Models\Cake;
use App\Models\Food;
use App\Models\Drink;
use App\Models\Gambar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
   public function index(){  

       $makanan = DB::table('food')->latest('id')->paginate(8);
        $cake = DB::table('cake')->latest('id')->paginate(8);
        $drink = DB::table('drink')->latest('id')->paginate(8);
      return view('menu')->with(['drink'=>$drink,'makanan'=>$makanan,'cake'=>$cake]);
   
   }
} 
