<?php

namespace App\Http\Controllers\Editor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{

    public function __construct()
    {
       $this->KategoriModel = new Kategori;
    }
    public function index()
    {
       $data =[
        'kategori'=> $this->KategoriModel->getKategori(),
       ];

       return view ('Dashboard.Editor.Kategori.index',$data);
    }
    public function add(Request $request)
    {
      Kategori::create([
         'nama_kategori' =>$request->nama_kategori
      ]);
      return redirect()->route('Editor.Kategori.index')->with('success','Data Berhasil Ditambahkan');
    }
    public function delete($id)
    {
       $data = Kategori::find($id);
       $data->delete();
       return redirect()->route('Editor.Kategori.index')->with('success','Data Berhasil Dihapus');
    }
    public function update(Request $request,$id)
    {
      $data = Kategori::find($id);
      $data->update(
         [
            'nama_kategori' =>$request->nama_kategori 
         ]);
      return redirect()->route('Editor.Kategori.index')->with('success','Data Berhasil Diedit');
    }
}
