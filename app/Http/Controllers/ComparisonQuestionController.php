<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\ComparisonQuestion;
use App\Models\Criteria;
use Illuminate\Http\Request;

class ComparisonQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard.perbandingan.pertanyaan', [
            'title' => "Pertanyaan Perbandingan",
            'cQuestion' => ComparisonQuestion::all(),
        ]);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dashboard.perbandingan.createPertanyaan', [
            'title' => "Buat Pertanyaan Baru | Dashboard Admin",
            'alternatifs' => Alternatif::all(),
            'criterias' => Criteria::all(),

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'alternatif_id' => 'required',
            'criteria_id' => 'required',
            'pertanyaan' => 'required',
        ]);

        ComparisonQuestion::create($validatedData);

        return redirect('/pertanyaan-perbandingan')->with('added', 'Pertanyaan Terbaru Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ComparisonQuestion  $comparisonQuestion
     * @return \Illuminate\Http\Response
     */
    public function show(ComparisonQuestion $comparisonQuestion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ComparisonQuestion  $comparisonQuestion
     * @return \Illuminate\Http\Response
     */
    public function edit(ComparisonQuestion $comparisonQuestion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ComparisonQuestion  $comparisonQuestion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ComparisonQuestion $comparisonQuestion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ComparisonQuestion  $comparisonQuestion
     * @return \Illuminate\Http\Response
     */
    public function destroy(ComparisonQuestion $comparisonQuestion)
    {
        //
    }
}
