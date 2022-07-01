<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function addfood(){
        return view("contact.createfood");
    }

    public function prosesaddfood(Request $request){
        // $request->file('gambar')->store('post-gambar');
        // Gambar::create($request->all());
        
        // return redirect()->intended('contact')->with("flash_message", "Menu berhasil Ditambahkan");

        $request->validate([
            'nama' => ['required','max:8000','unique:food'],
            'gambar' => 'required|image|mimes:jpeg,png,jpg|',
            'harga' => 'required',
        ]);
        
        $file = $request->file('gambar');
        $namafile = $file->getClientOriginalName();
        $tujuanFile = 'asset/food';

        $file->move($tujuanFile,$namafile);

        $newMobil = new Food;
        $newMobil->nama = $request->nama;
        $newMobil->gambar = $namafile;
        $newMobil->harga = $request->harga;
        $newMobil->save();
        return redirect('admin-food')->with('status', 'Menu berhasil di tambahkan');
    }

    public function editfood($id){
        $makanan = Food::find($id);

        return view('contact.editfood',compact('makanan'));
    }

    public function proseseditfood(Request $request, $id){
       $makanan =Food::find($id);
       $makanan ->update($request->all());

       return redirect()->intended('admin-food')->with("flash_message", "Menu berhasil Diubah");
    }
    public function deletefood($id)
    {
        Food::destroy($id);
        return redirect('admin-food')->with('flash_message', 'Data ini akan dihapus?');  
    }
}
