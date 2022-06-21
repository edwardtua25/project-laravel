<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GaleriController extends Controller
{
    public function index(){
        $galeri = DB::table('galeri')->latest('id')->paginate(8);
        return view('galery',compact('galeri'));
    }
    public function show($id){
        $galeri = Galeri::find($id);
        return view('galery.showg')->with('galeri', $galeri);
    }
}
