<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Network extends Authenticatable
{
    use HasFactory;

    protected $guard ='network';

    public function sekolah(){
        return $this->belongsTo('App\Models\Sekolah', 'id_sekolah', 'id');
    }

    protected $fillable = [
        'nama',
        'username',
        'email',
        'password',
        'nisn',
        'tmpt_lahir',
        'tgl_lahir',
        'id_sekolah',
        'domisili',
        'foto',
        'hp',
        'status',
        'pembayaran'
    ];

    protected $hidden = [
        'password',
        'remember_token'
    ];
}
