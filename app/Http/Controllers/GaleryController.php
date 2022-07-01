<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
    public function addgaleri(){
        return view('contact.creategaleri');
    }
    public function prosesaddgaleri(Request $request){
    
        
        $file = $request->file('gambar');
        $namafile = $file->getClientOriginalName();
        $tujuanFile = 'asset/galeri';

        $file->move($tujuanFile,$namafile);
        $newGaleri = new Galeri;
        $newGaleri->gambar = $namafile;
        $newGaleri -> deskripsi = $request->deskripsi;
        $newGaleri -> artikel = $request->artikel;

        $newGaleri->save();
        return redirect()->intended('admin-galeri')->with("flash_message", "Menu berhasil Ditambahkan");

    }
    public function editgaleri($id){
        $galeri = Galeri::find($id);

        return view('contact.editgaleri',compact('galeri'));
    }

    public function proseseditgaleri(Request $request, $id){
        $galeri =Galeri::find($id);
        $galeri ->update($request->all());
        return redirect()->intended('admin-galeri')->with("flash_message", "Galery berhasil Diubah");
     }
     public function deletegalery($id)
     {
        Galeri::destroy($id);
         return redirect()->intended('admin-galeri')->with('flash_message', 'Data ini akan dihapus?');  
     }
}
