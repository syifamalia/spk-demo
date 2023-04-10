<?php

namespace App\Http\Controllers;

use App\Models\CriterionWeight;
use App\Models\RelativeWeight;
use Illuminate\Http\Request;

class RelativeWeightController extends Controller
{
    public function hitungBobotRelative()
    {
        $user_id = auth()->id();
        $bobot_kriteria = CriterionWeight::where('user_id', $user_id)->get();

        $total_bobot_awal = $bobot_kriteria->sum('bobot');

        foreach ($bobot_kriteria as $bk) {
            $bobot_relative = $bk->bobot / $total_bobot_awal;

            $data = [
                'user_id' => $user_id,
                'criteria_id' => $bk->criteria_id,
                'bobot_relatif' => $bobot_relative,
            ];

            RelativeWeight::create($data);
        }

        return redirect()->back()->with('success', 'Bobot kepentingan berhasil dihitung.');
    }
}
