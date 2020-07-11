<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = 'anggota';

    public function Hadiah() {
        return $this->belongsToMany('App\Hadiah');
    }
}
