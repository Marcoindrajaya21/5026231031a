<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewKaryawanDBController extends Controller
{
    public function newkaryawanindex()
    {
    	// mengambil data dari table pegawai
    	$newkaryawan = DB::table('newkaryawan')->get();
        //$pegawai = DB::table('pegawai')->paginate(10);

    	// mengirim data pegawai ke view index
    	return view('indexnewkaryawan',['newkaryawan' => $newkaryawan]);
    }

// method untuk menampilkan view form tambah pegawai
    public function tambahnewkaryawan(){
        // memanggil view tambah
        return view('tambahnewkaryawan');
    }

    // method untuk insert data ke table pegawai
public function storekaryawan(Request $request)
{
	// insert data ke table pegawai
	DB::table('newkaryawan')->insert([
		'NIP' => $request->NIP,
		'nama' => $request->nama,
		'pangkat' => $request->pangkat,
		'gaji' => $request->gaji
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/eas');

}

// method untuk hapus data pegawai
public function hapusnewkaryawan($NIP)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('newkaryawan')->where('NIP',$NIP)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/eas');
}

}
