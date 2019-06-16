<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Participant;

class ParticipantController extends Controller
{
    public function create()
    {
        $data3 = DB::table('projets')->whereRaw('id')->get('id')->last();
        $data4 = implode("/n", array_flatten($data3));
        return view('projets.participant', ['data4' => $data4]);
    }

    public function store(Request $request)
    {
        $participant = new Participant();

        $participant->nom = $request->input('nom');
        $participant->role = $request->input('role');
        $participant->projet_id = $request->input('projet_id');
        $participant->save();
        
        return redirect('projets');
    }
}
