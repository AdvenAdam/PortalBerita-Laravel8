<?php

namespace App\Http\Controllers\Creator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function __construct()
    {
        $this->BeritaModel = new Berita;
    }

    public function index()
    {
        $data = [
        'berita' => $this->BeritaModel->getBerita()
        ];
        return view('Dashboard.Creator.Berita.index',$data);
    }

    public function input()
    {
        $data = [
            'kategori' => $this->BeritaModel->Kategori(),
            ];
        return view('Dashboard.Creator.Berita.input',$data);
    }
    public function add(Request $request)
    {
        $request->validate([
            'judul' => 'required|unique:tbl_berita,judul',
            'author'=>'required',
            'deskripsi' =>'required',
            'id_kategori'=>'required',
            'thumbnail' =>'required',
            'content'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $file = $request->thumbnail ;
        if (!$request->hasFile('thumbnail')) {
            $namaFoto = 'default.jpg';
        }else {
            // generate nama foto random string dan timestamp 
            $namaFoto = uniqid() . '.' . time() . '.' . $file->extension();
            //pindah file
            $file->move(public_path('thumbnail'), $namaFoto);
        }
        Berita::create([
            'judul' => $request->judul,
            'author'=> $request->author,
            'id_kategori'=>$request->id_kategori,
            'deskripsi'=>$request->deskripsi,
            'content'=>$request->content,
            'thumbnail'=>$namaFoto,
        ]);

        return redirect()->route('Creator.Berita.index')->with('success','Data Berhasil Ditambahkan');
    }
    public function edit()
    {
        $data = [
            'berita' => $this->BeritaModel->getBerita(),
            'kategori' => $this->BeritaModel->Kategori(),
            ];
        return view('Dashboard.Creator.Berita.edit',$data);
    }
    public function update(Request $request)
    {

        return redirect()->route('Creator.Berita.index')->with('success','Data Berhasil Diedit');
    }

    public function delete($id)
    {
        $data = Berita::find($id);
        $data->delete();
        return redirect()->route('Creator.Berita.index')->with('success','Data Berhasil Dihapus');

    }

}
