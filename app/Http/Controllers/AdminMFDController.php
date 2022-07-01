<?php

namespace App\Http\Controllers;

use App\Models\Gambar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminMFDController extends Controller
{
    public function index(){

        $menu2 = DB::table('gambar')->latest('id')->paginate(5);

        return view('contact.adminmfd')->with(['menu2'=>$menu2]);
    }
    public function index01(){
        return view('contact.adminmfd');
    }
}
