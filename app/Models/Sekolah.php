<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Sekolah extends Authenticatable
{
    use HasFactory;

    protected $guard ='sekolah';

    public function networks(){
        return $this->hasMany('App\Models\Network', 'id_sekolah', 'id');
    }

    protected $fillable = [
        'nama',
        'username',
        'password',
        'email',
        'telepon',
        'alamat',
        'logo',
        'pj',
        'jabatan_pj',
        'nip_pj',
        'hp_pj',
    ];

    protected $hidden = [
        'password',
        'remember_token'
    ];

    protected $casts = [
        'address' => 'dateTime',
    ];
}
