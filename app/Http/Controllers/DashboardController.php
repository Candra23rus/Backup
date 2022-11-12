<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form1;
class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.dashboard');
    }
    public function survey()
    {
        return view('survey');
    }
    public function create()
    {
        return view('form1');
    }
    public function store(Request $request)
    {
        $validateData = $request->validate([
             'nama' => '',
             'ktp' => '',
             'alamat' => '',
             'desa' => '',
             'kec' => '',
             'kab' => '',
             'jmlPenghuni' => '',
             'penghasilan' => '',
             'usia' => '',
             'luasTanah' => '',
             'statusTanah' => '',
             'luasbangunan' => '',
             'pondasi' => '',
             'tiang' => '',
             'balok' => '',
             'rangkaAtap' => '',
             'dinding' => '',
             'kusen' => '',
             'atap' => '',
             'lantai' => '',
             'kecukupan' => '',
             'pencahayaan' => '',
             'penghawaan' => '',
             'mck' => '',
             'kesanggupanSwadaya' => '',
             'gambar' => '',
             ]);

             $data = new Form1();
             $data->nama = $validateData['nama'];
             $data->ktp = $validateData['ktp'];
             $data->alamat = $validateData['alamat'];
             $data->desa = $validateData['desa'];
             $data->kec = $validateData['kec'];
             $data->kab = $validateData['kab'];
             $data->jmlPenghuni = $validateData['jmlPenghuni'];
             $data->penghasilan = $validateData['penghasilan'];
             $data->usia = $validateData['usia'];
             $data->luasTanah = $validateData['luasTanah'];
             $data->statusTanah = $validateData['statusTanah'];
             $data->luasBangunan = $validateData['luasBangunan'];
             $data->pondasi = $validateData['pondasi'];
             $data->tiang = $validateData['tiang'];
             $data->balok = $validateData['balok'];
             $data->rangkaAtap = $validateData['rangkaAtap'];
             $data->dinding = $validateData['dinding'];
             $data->kusen = $validateData['kusen'];
             $data->atap = $validateData['atap'];
             $data->lantai = $validateData['lantai'];
             $data->kecukupan = $validateData['kecukupan'];
             $data->pencahayaan = $validateData['pencahayaan'];
             $data->penghawaan = $validateData['penghawaan'];
             $data->mck = $validateData['mck'];
             $data->kesanggupan = $validateData['kesanggupanSwadaya'];
             $data->gambar = $validateData['gambar'];
             $data->save();

             return view('form1');
    }
}
