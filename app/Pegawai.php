<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = "pegawai";
    protected $primaryKey = "pegawai_id";
    public $timestamps = false;
    protected $fillable = ['nama','jabatan','umur','alamat'];
}
