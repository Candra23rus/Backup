<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\form2;
class Form2Controller extends Controller
{
   public function create(){
    return view('form2');
   }
   public function store(Request $request)
   {
    $this->validate($request, [
        'nama' => '',
        'ktp' => '',
        'alamat' => '',
        'desa' => '',
        'kec' => '',
        'kab' => '',
        // 'depan' => '',
        // 'dalam' => '',
        // 'belakang' => '',
        // 'kiri'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // 'kanan' => '',
        // 'wc' => '',
        'atap1' => '',
        'lantai1' => '',
        'dinding1' => '',
        'atap' => '',
        'lantai' => '',
        'dinding' => '',

    ]);
    $depan = $request->file('depan');
    $depan->storeAs('public/posts', $depan->hashName());

    $dalam = $request->file('dalam');
    $dalam->storeAs('public/posts', $dalam->hashName());

    $belakang = $request->file('belakang');
    $belakang->storeAs('public/posts', $belakang->hashName());

    $kiri = $request->file('kiri');
    $kiri->storeAs('public/posts', $kiri->hashName());

    $kanan = $request->file('kanan');
    $kanan->storeAs('public/posts', $kanan->hashName());

    $wc = $request->file('wc');
    $wc->storeAs('public/posts', $wc->hashName());

    form2::create([
        'depan'     => $depan->hashName(),
        'dalam'     => $dalam->hashName(),
        'belakang'     => $belakang->hashName(),
        'kiri'     => $kiri->hashName(),
        'kanan'     => $kanan->hashName(),
        'wc'     => $wc->hashName(),
        'nama' => $request->nama,
        'ktp' => $request->ktp,
        'alamat' => $request->alamat,
        'desa' => $request->desa,
        'kec' => $request->kec,
        'kab' => $request->kab,
        'atap1' => $request->atap1,
        'lantai1' => $request->lantai1,
        'dinding1' => $request->dinding1,
        'atap' => $request->atap,
        'lantai' => $request->lantai,
        'dinding' => $request->dinding,

    ]);

    return redirect()->route('form3s.create', [$request->id]);
   }

}
