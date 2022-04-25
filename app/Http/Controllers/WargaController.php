<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;

class WargaController extends Controller
{
    //
    public function index()
    {
        $warga = Warga::all(); //mengambail semua nilai
        return view('warga', compact(['warga']));
        
    }

    public function create()
    {
        return view('tambahWarga');
    }

    public function saveDataWarga(Request $request)
    {
        //dd($request->all());
        Warga::create($request->except(['_token']));
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
        $warga->update($request->except(['_token']))
        return redirect('warga');
    }
    
}
