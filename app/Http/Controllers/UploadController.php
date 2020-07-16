<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gambar;
Use File;
class UploadController extends Controller
{
    public function upload() {
        $gambar = Gambar::get();
        return view('upload.show', ['gambar' => $gambar]);
    }

    public function upload_process(Request $request) {
        $this->validate($request, [
            'file' => 'required|file|image|mimes:jpeg,png,gif,webp|max:2048',
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
        // $tujuan_upload = 'data_file';
        
        // upload file process
        // $file->move($tujuan_upload, $file->getClientOriginalName());


        $nama_file = time()."_".$file->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload, $nama_file);

        Gambar::create([
            'file' => $nama_file,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->back();
    }

    public function hapus($id) {
        // hapus file
        $gambar = Gambar::where('id', $id)->first();
        File::delete('data_file/'.$gambar->file);

        // hapus data
        Gambar::where('id',$id)->delete();

        return redirect()->back();
    }
}
