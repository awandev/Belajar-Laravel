<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// gunakan session
use Session;

class NotifController extends Controller
{
    public function index() {
        return view('notifikasi');
    }

    public function sukses() {
        Session::flash('sukses', 'Ini notifikasi Sukses');
        return redirect('pesan');
    }

    public function peringatan() {
        Session::flash('peringatan', 'Ini notifikasi Peringatan');
        return redirect('pesan');
    }

    public function gagal() {
        Session::flash('gagal', 'Ini notifikasi Gagal');
        return redirect('pesan');
    }
}
