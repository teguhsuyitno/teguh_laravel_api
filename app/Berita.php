<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    //
    protected $table='berita';

    protected $fillable=[
        'judul','isi','users_id','kategori_berita_id'
    ];

    public function kategoriBerita(){
        return $this->belongsTo(kategoriBerita::class, 'kategori_berita_id', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}
