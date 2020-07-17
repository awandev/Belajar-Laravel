<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function tampilSession(Request $request) {
        if($request->session()->has('nama')) {
            echo $request->session()->get('nama');
        } else {
            echo 'Tida ada data dalam session';
        }
    }

    public function buatSession(Request $request) {
        $request->session()->put('nama', 'Awal Kurniawan');
        echo 'Data telah ditambahkan session';
    }

    public function hapusSession(Request $request) {
        $request->session()->forget('nama');
        echo 'Data Telah dihapus dari session';
    }
}
