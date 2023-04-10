<?php

namespace App\Http\Controllers;

use App\Models\Svector;
use App\Models\VectorV;
use Illuminate\Http\Request;

class VectorVController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->id();
        $vektorV = VectorV::where('user_id', $user_id)->get();
        $vektorV = $vektorV->sortByDesc('vektor_v');

        return view('admin.dashboard.result.v-vector', [
            'title' => "Vector V",
            'vektorV' => $vektorV,
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
        $vektorS = Svector::where('user_id', $user_id)->get();

        $total_vektor_s = $vektorS->sum('vektor_s');

        foreach ($vektorS as $vS) {
            $vektorV = $vS->vektor_s / $total_vektor_s;

            $data = [
                'user_id' => $user_id,
                'alternatif_id' => $vS->alternatif_id,
                'vektor_v' => $vektorV,
            ];

            VectorV::create($data);
        }

        return redirect('/vektor-v')->with('added', 'Vektor V Terbaru Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VectorV  $vectorV
     * @return \Illuminate\Http\Response
     */
    public function show(VectorV $vectorV)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VectorV  $vectorV
     * @return \Illuminate\Http\Response
     */
    public function edit(VectorV $vectorV)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VectorV  $vectorV
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VectorV $vectorV)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VectorV  $vectorV
     * @return \Illuminate\Http\Response
     */
    public function destroy(VectorV $vectorV)
    {
        //
    }
}
