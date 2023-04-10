<?php

namespace App\Http\Controllers;

use App\Models\CriterionWeight;
use App\Models\Comparison;
use App\Models\RelativeWeight;
use App\Models\Svector;
use App\Models\VectorV;
use Illuminate\Http\Request;

class ResetController extends Controller
{
    public function resetAkun()
    {
        $user_id = auth()->id();
        // Menghapus data dari tabel pertama
        CriterionWeight::where('user_id', $user_id)->delete();

        // Menghapus data dari tabel kedua
        RelativeWeight::where('user_id', $user_id)->delete();

        // Menghapus data dari tabel ketiga
        Comparison::where('user_id', $user_id)->delete();

        // Menghapus data dari tabel keempat
        Svector::where('user_id', $user_id)->delete();

        // Menghapus data dari tabel kelima
        VectorV::where('user_id', $user_id)->delete();


        return redirect('/profile')->with('deleted', 'Data Berhasil Dihapus!');
    }
}
