<?php

namespace App\Http\Controllers;

use App\Models\Gambar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GambarsController extends Controller
{
    public function addgambar(){
        return view("contact.creategambar");
    }

    public function prosesaddgambar(Request $request){

             $request->validate([
            'nama' => 'required|max:8000|unique:gambar',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|',
            'harga' => 'required',
        ]);
               
        $file = $request->file('gambar');
        $namafile = $file->getClientOriginalName();
        $tujuanFile = 'asset/gambar';

        $file->move($tujuanFile,$namafile);

        $newMobil = new Gambar;
        $newMobil->nama = $request->nama;
        $newMobil->gambar = $namafile;
        $newMobil->harga = $request->harga;
        $newMobil->save();
        return redirect('contact')->with('status_berhasil', 'Menu berhasil di tambahkan');
        

        // $request->file('gambar')->store('post-gambar');
        // Gambar::create($request->all());
        
        // return redirect()->intended('contact')->with("flash_message", "Menu berhasil Ditambahkan");

       
 
    }
    public function validasi(){
        return redirect('contact')->with('status_error', ' Menu Tidak Dapat Ditambahkan Lagi!');
    }

    public function editgambar($id){
        $menu = Gambar::find($id);

        return view('contact.editgambar',compact('menu'));
    }

    public function proseseditgambar(Request $request, $id){
       $menu =Gambar::find($id);
       $menu ->update($request->all());

       return redirect()->intended('contact')->with("flash_message", "Menu berhasil Diubah");
    }
    public function deletegambar($id)
    {
        Gambar::destroy($id);
        return redirect('contact')->with('flash_message', 'Data ini akan dihapus?');  
    }
}
