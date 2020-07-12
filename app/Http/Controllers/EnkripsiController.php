<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class EnkripsiController extends Controller
{
    public function enkrip() {
        $encrypted = Crypt::encryptString('Ini adalah website awandev.com');
        $decrypted = Crypt::decryptString($encrypted);

        echo "Hasil enkripsi : ". $encrypted."<br /><br />";
        echo "Hasil Descripsi : ". $decrypted."<br /><br />";
    }


    public function hash() {
        $hash_password = Hash::make('Ini adalah Hash Saya');
        echo $hash_password;
    }
}
