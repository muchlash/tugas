<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Berita;
class kategori extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'id_kategori';
    protected $table = "kategori";
    protected $fillable = ['nama_kategori'];
    
    public function berita()
    {
        return $this->belongsToMany(berita::class);
    }
}
