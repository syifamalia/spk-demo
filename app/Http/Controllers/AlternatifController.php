<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorealternatifRequest;
use App\Http\Requests\UpdatealternatifRequest;
use App\Models\Alternatif;
use Illuminate\Http\Request;

class AlternatifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard.alternatif.index', [
            'title' => "Alternatif | Dashboard Admin",
            'alternatifs' => Alternatif::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dashboard.alternatif.create', [
            'title' => "Buat Alternatif Baru | Dashboard Admin"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorealternatifRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kode_alternatif' => 'required|unique:alternatifs',
            'nama_alternatif' => 'required',
        ]);

        Alternatif::create($validatedData);

        return redirect('/alternatif')->with('added', 'Alternatif Terbaru Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\alternatif  $alternatif
     * @return \Illuminate\Http\Response
     */
    public function show(Alternatif $alternatif)
    {
        // return view('admin.dashboard.alternatif.detail', [
        //     'title' => "Detail Alternatif | Dashboard Admin",
        //     'alternatif' => $alternatif
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\alternatif  $alternatif
     * @return \Illuminate\Http\Response
     */
    public function edit(Alternatif $alternatif)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatealternatifRequest  $request
     * @param  \App\Models\alternatif  $alternatif
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatealternatifRequest $request, alternatif $alternatif)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\alternatif  $alternatif
     * @return \Illuminate\Http\Response
     */
    public function destroy(alternatif $alternatif)
    {
        //
    }
}

?>