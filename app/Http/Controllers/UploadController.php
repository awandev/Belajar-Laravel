<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload() {
        return view('upload.show');
    }

    public function upload_process(Request $request) {
        $this->validate($request, [
            'file' => 'required',
            'keterangan' => 'required',
        ]);

        // menyimpan data file yang di upload ke variabel $file
        $file = $request->file('file');

        // nama file
        echo 'Nama File : '. $file->getClientOriginalName();
        echo '<br />';

        // ekstensi file
        echo 'File extension : '.$file->getClientOriginalExtension();
        echo '<br />';

        // real path
        echo 'File Real Path : '. $file->getRealPath();
        echo '<br />';

        // file size
        echo 'File Size : '. $file->getSize();
        echo '<br />';

        // tipe mime
        echo 'File Mime type : '. $file->getMimeType();
        echo '<br />';

        //isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_file';
        
        // upload file process
        $file->move($tujuan_upload, $file->getClientOriginalName());
    }
}
