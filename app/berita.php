<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    public $timestamps = false;
    protected $table = "berita";
    protected $primaryKey = 'id_berita';
    protected $fillable = ['judul_berita','tanggal_berita','penulis_berita','isi_berita'];
    
    public function kategori()
    {
    return $this->belongsToMany(kategori::class);
    }
}
