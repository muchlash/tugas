<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use App\Kategori;
class TampilController extends Controller
{
    //Read data Berita
    public function index(){
        $Berita = Berita::all();
        return view ('lihatdata',['berita'=>$Berita]);
    }
    //Read data Kategori
    public function kat(){
        $Kategori = Kategori::all();
        return view ('lihatkategori',['kategori'=>$Kategori]);
    }

    public function kembali(){
        return back();
    }

    //Create Berita
    public function baru(){
        return view('lihatdata_baru');
    }
    public function store(Request $request)
    {
    	$this->validate($request,[
    		'judul_berita' => 'required|min:3|max:40',
            'tanggal_berita' => 'required|date',
    		'penulis_berita' => 'required|min:5|max:20',
            'isi_berita' => 'required|min:5|max:150'
    	]);
        Berita::create([
    		'judul_berita' => $request->judul_berita,
            'tanggal_berita' => $request->tanggal_berita,
    		'penulis_berita' => $request->penulis_berita,
            'isi_berita' => $request->isi_berita
    	]);
    	return redirect('/tampil');
    }

    //Create Kategori
    public function kategoribaru(){
        return view('lihatkategori_baru');
    }//
    public function simpan(Request $request)
    {
    	$this->validate($request,[
    		'nama_kategori' => 'required|min:3|max:40',
    	]);

        Kategori::create([
    		'nama_kategori' => $request->nama_kategori
    	]);
    	return redirect('/tampilkategori');
    }


    public function edit($id_berita){

   $berita = Berita::find($id_berita);
   return view('lihatdata_edit', ['berita' => $berita]);
}
    public function update(Request $request, $id_berita)
{
        $this->validate($request,[
	   'judul_berita' => 'required|min:3|max:40',
        'tanggal_berita' => 'required|date',
        'penulis_berita' => 'required|min:5|max:20',
        'isi_berita' => 'required|min:5|max:150'
    ]);

    $berita = Berita::find($id_berita);
    $berita->judul_berita = $request->judul_berita;
    $berita->tanggal_berita = $request->tanggal_berita;
    $berita->penulis_berita = $request->penulis_berita;
    $berita->isi_berita = $request->isi_berita;
    $berita->save();
   return redirect('/tampil');
}

  public function ubah($id_kategori){

  $kategori = Kategori::find($id_kategori);
  return view('lihatkategori_edit', ['kategori' => $kategori]);
  }
  public function perbaharui(Request $request, $id_kategori)
  {
    $this->validate($request,[
      'nama_kategori' => 'required|min:3|max:40'
    ]);

    $kategori = Kategori::find($id_kategori);
    $kategori->nama_kategori = $request->nama_kategori;
    $kategori->save();
    return redirect('/tampilkategori');
}

//delete Berita
    public function delete($id_berita)
{
    $berita = Berita::find($id_berita);
    $berita->delete();
    return redirect('/tampil');
}
//delete Kategori
    public function del($id_kategori)
    {
      dd($id_kategori);
    $kategori = Kategori::find($id_kategori);
    $kategori->delete();
    return redirect('/tampilkategori');
    }

    public function news(Request $request){
        $berita = new Berita;
        $berita->judul_berita = 'angin malam';
        $berita->tanggal_berita = '2012-12-12';
        $berita->penulis_berita = 'akusaja';
        $berita->isi_berita = 'ya isinya macem2 pak';

        $berita->save();
        $kategori = Kategori::find([2, 6]);

        $berita->kategori()->attach($kategori);

        return 'Antok tak akui cen Keren';
    }
    public function lihat(){
        $berita = Berita::get();
    return view ('lihat', ['berita' => $berita]);
    }
}
