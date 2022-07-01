<?php

namespace App\Http\Controllers;

use App\Models\Cake;
use Illuminate\Http\Request;

class CakeController extends Controller
{
    public function addcake(){
        return view("contact.createcake");
    }

    public function prosesaddcake(Request $request){
        // $request->file('gambar')->store('post-gambar');
        // Gambar::create($request->all());
        
        // return redirect()->intended('contact')->with("flash_message", "Menu berhasil Ditambahkan");

        $request->validate([
            'nama' => ['required','max:8000','unique:cake'],
            'gambar' => 'required|image|mimes:jpeg,png,jpg|',
            'harga' => 'required',
        ]);
        
        $file = $request->file('gambar');
        $namafile = $file->getClientOriginalName();
        $tujuanFile = 'asset/cake';

        $file->move($tujuanFile,$namafile);

        $newMobil = new Cake;
        $newMobil->nama = $request->nama;
        $newMobil->gambar = $namafile;
        $newMobil->harga = $request->harga;
        $newMobil->save();
        return redirect('admin-cake')->with('status', 'Menu berhasil di tambahkan');
    }

    public function editcake($id){
        $cake = Cake::find($id);

        return view('contact.editcake',compact('cake'));
    }

    public function proseseditcake(Request $request, $id){
       $cake =Cake::find($id);
       $cake ->update($request->all());

       return redirect()->intended('admin-cake')->with("flash_message", "Menu berhasil Diubah");
    }
    public function deletecake($id)
    {
        Cake::destroy($id);
        return redirect('admin-cake')->with('flash_message', 'Data ini akan dihapus?');  
    }
}
