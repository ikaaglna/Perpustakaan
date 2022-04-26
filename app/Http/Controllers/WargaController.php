<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;

class WargaController extends Controller
{
    public function index()
    {
        $warga = Warga::all(); //mengambail semua nilai
        return view('warga', compact(['warga']));   
    }

    public function create()
    {
        return view('tambahWarga');
    }

    public function tambahDataWarga(Request $request)
    {
        $file = $request->surat;
        $namaFile = $file->getClientOriginalName();
        //dd($namaFile);

        $file->move(public_path().'/assets/upload', $namaFile); //simpan ke direktori
        //Warga::create($request->except(['_token']));
        Warga::create([
            'nama' => $request->nama,
            'nik' => $request->nik,
            'no_kk' => $request->no_kk,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->nama,
            'surat' => $namaFile
        ]);
        return redirect('warga');
    }

    public function ubah($id)
    {
        $warga = Warga::find($id); //mencari nilai berdasarkan id
        return view('ubahWarga', compact(['warga']));
    }

    public function ubahDataWarga($id, Request $request)
    {
        $warga = Warga::find($id); //mencari nilai berdasarkan id
        $warga->update($request->except(['_token']));
        
        //$fileBaru = $request->surat;
        //dd($fileBaru);
        // $fileLama = $warga['surat'];
        // unlink('assets/upload/' . $fileLama); //hapus didalam folder

        // $file->move(public_path().'/assets/upload', $fileBaru); //simpan ke direktori

        // $warga->update([
        //     'nama' => $request->nama,
        //     'nik' => $request->nik,
        //     'no_kk' => $request->no_kk,
        //     'jenis_kelamin' => $request->jenis_kelamin,
        //     'alamat' => $request->nama,
        //     'surat' => $fileBaru
        // ]);
        
        return redirect('warga');
    }

    public function hapusDataWarga($id)
    {
        $warga = Warga::find($id); //mencari nilai berdasarkan id
        $warga->delete();

        // $file = $warga['surat'];
        // unlink('assets/upload/' . $file); //hapus didalam folder
        return redirect('warga');
    }
    
    
}
