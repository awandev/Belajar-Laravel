<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// untuk soft deletes agar menghapus data sementara
// use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pegawai extends Model
{
    use softDeletes;
    protected $table = "pegawai";
    protected $primaryKey = "pegawai_id";
    // untuk menonaktifkan fitur timestamp
    // public $timestamps = false;

    // untuk validasi, field apa saja yang berlaku validasi
    protected $fillable = ['nama','jabatan','umur','alamat'];

    // untuk soft delete
    protected $dates = ['deleted_at'];
}
