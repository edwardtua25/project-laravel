<?php

namespace App\Http\Controllers;

use App\Models\Gambar;
use Illuminate\Http\Request;

class GambarController extends Controller
{
    public function addgambar(){
        return view("contact.creategambar");
    }

    public function prosesaddgambar(Request $request){
        $menu = Gambar::create($request->all());
        return redirect()->route("contact")->with("flash_message", "Menu berhasil Ditambahkan");
    }
}
