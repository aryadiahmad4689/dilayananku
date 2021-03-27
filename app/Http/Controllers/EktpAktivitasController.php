<?php

namespace App\Http\Controllers;

use App\Models\Ektp;
use App\Models\FailedEktp;
use Illuminate\Http\Request;

class EktpAktivitasController extends Controller
{
    public function index()
    {
        $ektps = Ektp::with('user')->get();
        return view('admin.aktivitas.ektp.index',compact('ektps'));
    }

    public function verifikasi(Request $request ,$id)
    {
        // menyimpan data tidak lengkap
        FailedEktp::create($request->all());

        // mendapatkan id ektp lalu menghapus ketika dinyatakan tidak lengkap
        $ektp = Ektp::findOfFail($id);
        $ektp->delete();
        return redirect()->back();
    }
}
