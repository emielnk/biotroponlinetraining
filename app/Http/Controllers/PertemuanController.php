<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Pertemuan;

class PertemuanController extends Controller
{
    public function showpertemuan($id_training)
    {
          $caripertemuan = Pertemuan::find($id_training);
          dd($caripertemuan);
          return view('detailtraining', ['cari' => $caripertemuan]);
    }

    public function datapertemuan(Request $request)
    {
        $listtraining = Training::select('tanggal_pelaksanaan','deskripsi_pertemuan')->get();
    }
}
