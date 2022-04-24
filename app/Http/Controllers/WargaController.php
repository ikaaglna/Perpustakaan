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

    
}
