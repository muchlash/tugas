<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use App\Kategori;
class TampilController extends Controller
{
    public function index(){
        $Berita = Berita::all();
        return view ('lihatdata',['berita'=>$Berita]);
    }
    public function baru(){
        return view('lihatdata_baru');
    }//
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
    public function delete($id_berita)
{
    $berita = Berita::find($id_berita);
    $berita->delete();
    return redirect('/tampil');
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
