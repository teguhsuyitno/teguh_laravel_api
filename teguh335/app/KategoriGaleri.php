<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriGaleri extends Model
{
    //
    protected $table='kategori_galeri';

    protected $fillable=[
        'nama','users_id'
    ];

    public function artikels(){
        return $this->hasMany(Artikel::class, 'kategori_artikel_id', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class,'users_id', 'id');
    }
}
