<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\form3;

class Form3Controller extends Controller
{
    public function create()
    {
        return view('form3');
    }
    public function store(Request $request)
    {

        $this->validate($request, [
            'ktp' => '',
            'pondasi' => 'required||max:12',
            'balok' => '',
            'plesteran1' => '',
            'kuda'     => '',
            'gording' => '',
            'penutupAtap' => '',
            'rangkaPlafond' => '',
            'penutupPlafond' => '',
            'dinding1' => '',
            'plesteran2' => '',
            'daun' => '',
            'daunPintu' => '',
            'kusen' => '',
            'lantai' => '',
            'listrikin' => '',
            'listrik' => '',
            'airin' => '',
            'air' => '',
            'drainase' => '',
            'limbah' => '',
            'finishingStruktur' => '',
            'finishingPlafond' => '',
            'finishingDinding' => '',
            'finishingKusen' => '',
        ]);
        form3::create([
            'ktp' => $request->ktp,
            'pondasi' => $request->pondasi,
            'balok' => $request->balok,
            'plesteran1' => $request->plesteran1,
            'kuda' => $request->kuda,
            'gording' => $request->gording,
            'penutupAtap' => $request->penutupAtap,
            'rangkaPlafond' => $request->rangkaPlafond,
            'penutupPlafond' => $request->penutupPlafond,
            'dinding1' => $request->dinding1,
            'plesteran2' => $request->plesteran2,
            'daun' => $request->daun,
            'daunPintu' => $request->daunPintu,
            'kusen' => $request->kusen,
            'lantai' => $request->lantai,
            'listrikin' => $request->listrikin,
            'listrik' => $request->listrik,
            'airin' => $request->airin,
            'air' => $request->air,
            'drainase' => $request->drainase,
            'limbah' => $request->limbah,
            'finishingStruktur' => $request->finishingStruktur,
            'finishingPlafond' => $request->finishingPlafond,
            'finishingDinding' => $request->finishingDinding,
            'finishingKusen' => $request->finishingKusen,
        ]);


        return redirect()->route('form1s.show', [$request->id]);

    }
    public function show()
    {
//         $mahasiswas = form3::all();
// return view('mahasiswa.index',['mahasiswas' => $mahasiswas]);
    }
}
