<?php

namespace App\Http\Controllers;

use App\Models\Comparison;
use App\Models\CriterionWeight;
use App\Models\RelativeWeight;
use App\Models\Svector;
use App\Models\User;
use App\Models\VectorV;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $user_id = auth()->id();
        $users = User::where('id', $user_id)->get();
        $bobot_kriteria = CriterionWeight::where('user_id', $user_id)->first();
        $vektor_s = Svector::where('user_id', $user_id)->first();
        $vektor_v = VectorV::where('user_id', $user_id)->first();

        return view('profile.index', [
            'title' => "Vector V",
            'users' => $users,
            'bobot_kriteria' => $bobot_kriteria,
            'vektor_s' => $vektor_s,
            'vektor_v' => $vektor_v,
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
