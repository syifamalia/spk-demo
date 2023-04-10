<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Comparison;
use App\Models\Criteria;
use App\Models\RelativeWeight;
use App\Models\Svector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SvectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard.result.s-vector', [
            'title' => "Vektor S",
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = auth()->user()->id;

        $alternatif = Alternatif::all();
        $kriteria = Criteria::all();
        $bobotRelatif = RelativeWeight::where('user_id', $user_id)->get();
        $perbandingan = Comparison::where('user_id', $user_id)->get();

        $vektorS = [];

        foreach ($alternatif as $alt) {
            $s = 1;

            foreach ($kriteria as $krit) {
                $bobot = $bobotRelatif->where('criteria_id', $krit->id)->first()->{'bobot_relatif'};

                $perbandingan_alternatif = $perbandingan->where('alternatif_id', $alt->id)->where('criteria_id', $krit->id)->first()->{'bobot'};

                if($krit->{'cost_benefit'} == 'COST'){
                    $s *= pow($perbandingan_alternatif, -$bobot);
                } else {
                    $s *= pow($perbandingan_alternatif, $bobot);
                }
            }

            $vektorS[$alt->id] = $s;
        }

        foreach ($vektorS as $key => $value) {
            $vektor = new Svector;
            $vektor->user_id = $user_id;
            $vektor->alternatif_id = $key;
            $vektor->vektor_s = $value;
            $vektor->save();
        }

        return redirect('/vektor-s')->with('added', 'Vektor S Terbaru Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Svector  $svector
     * @return \Illuminate\Http\Response
     */
    public function show(Svector $svector)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Svector  $svector
     * @return \Illuminate\Http\Response
     */
    public function edit(Svector $svector)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Svector  $svector
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Svector $svector)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Svector  $svector
     * @return \Illuminate\Http\Response
     */
    public function destroy(Svector $svector)
    {
        //
    }
}
