<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form1;

class Form1Controller extends Controller
{
    public function create()
    {
        //session(['id' => 'admin']);
        return view('form1');
    }
    public function store(Request $request)
    {

        $this->validate($request, [
            'nama' => 'required|min:3|max:50',
            'ktp' => 'required|min:3|max:50',
            'alamat' => 'required',
            'desa' => '',
            'kec' => '',
            'kab' => '',
            'jmlPenghuni' => '',
            'penghasilan' => '',
            'usia' => '',
            'gambar'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'luasTanah' => '',
            'statusTanah' => '',
            'luasBangunan' => '',
            'pondasi' => '',
            'tiang' => '',
            'balok' => '',
            'rangkaAtap' => '',
            'dinding' => '',
            'kusen' => '',
            'atap' => '',
            'lantai' => '',
            'cukup' => '',
            'cahaya' => '',
            'hawa' => '',
            'mck' => '',
            'swadaya' => '',
        ]);
        $gambar = $request->file('gambar');
        $gambar->storeAs('public/posts', $gambar->hashName());
        session(['id' => $request->ktp, 'nama' => $request->nama, 'alamat' => $request->alamat, 'desa' => $request->desa, 'kec' => $request->kec, 'kab' => $request->kab]);
        Form1::create([
            'gambar'     => $gambar->hashName(),
            'nama' => $request->nama,
            'ktp' => $request->ktp,
            'alamat' => $request->alamat,
            'desa' => $request->desa,
            'kec' => $request->kec,
            'kab' => $request->kab,
            'jmlPenghuni' => $request->jmlPenghuni,
            'penghasilan' => $request->penghasilan,
            'usia' => $request->usia,
            'luasTanah' => $request->luasTanah,
            'statusTanah' => $request->statusTanah,
            'luasBangunan' => $request->luasBangunan,
            'pondasi' => $request->pondasi,
            'tiang' => $request->tiang,
            'balok' => $request->balok,
            'rangkaAtap' => $request->rangkaAtap,
            'dinding' => $request->dinding,
            'kusen' => $request->kusen,
            'atap' => $request->atap,
            'lantai' => $request->lantai,
            'cukup' => $request->cukup,
            'cahaya' => $request->cahaya,
            'hawa' => $request->hawa,
            'mck' => $request->mck,
            'swadaya' => $request->swadaya,
        ]);


        return redirect()->route('form2s.create', [$request->id]);
    }
    public function show()
    {
        $data = Form1::all();

        return view('form4', ['data' => $data]);
    }
}
