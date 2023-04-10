<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Comparison;
use App\Models\ComparisonQuestion;
use App\Models\Criteria;
use Illuminate\Http\Request;

class ComparisonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard.perbandingan.index', [
            'title' => "Perbandingan",
            'comparison_questions' => ComparisonQuestion::all(),
            'alternatifs' => Alternatif::all(),
            'criterias' => Criteria::all(),
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
        $user_id = auth()->id();
        foreach ($request->input('bobot') as $alternatif_id => $criterias) {
            foreach ($criterias as $kriteria_id => $bobot) {
                Comparison::updateOrCreate(
                    ['user_id' => $user_id, 'alternatif_id' => $alternatif_id, 'criteria_id' => $kriteria_id],
                    ['bobot' => $bobot]
                );
            }
        }

        return redirect('/kriteria')->with('added', 'Alternatif Terbaru Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comparison  $comparison
     * @return \Illuminate\Http\Response
     */
    public function show(Comparison $comparison)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comparison  $comparison
     * @return \Illuminate\Http\Response
     */
    public function edit(Comparison $comparison)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comparison  $comparison
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comparison $comparison)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comparison  $comparison
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comparison $comparison)
    {
        //
    }
}
