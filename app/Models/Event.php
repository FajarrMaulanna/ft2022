<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public function linimasa(){
        return $this->hasMany('App\Models\Linimasa', 'event_id', 'id');
    }

    protected $fillable = [
        'nama',
        'slug',
        'foto',
        'cakupan',
        'kategori',
        'deskripsi',
        'panduan',
    ];
};
