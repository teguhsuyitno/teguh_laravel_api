<?php

namespace App;


use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function artikels(){
        return $this->hasMany(Artikel::class, 'users_id', 'id');
    }

    public function kategoriArtikels(){
        return $this->hasMany(KategoriArtikel::class, 'users_id', 'id');
    }

    public function beritas(){
        return $this->hasMany(Berita::class, 'users_id', 'id');
    }

    public function kategoriBeritas(){
        return $this->hasMany(KategoriBerita::class, 'users_id', 'id');
    }

    public function pengumumans(){
        return $this->hasMany(Pengumuman::class, 'users_id', 'id');
    }

    public function kategoriPengumumans(){
        return $this->hasMany(KategoriPengumuman::class, 'users_id', 'id');
    }

    public function galeris(){
        return $this->hasMany(Galeri::class, 'users_id', 'id');
    }

    public function kategoriGaleris(){
        return $this->hasMany(KategoriGaleri::class, 'users_id', 'id');
    }

    
/**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
    


    
}
