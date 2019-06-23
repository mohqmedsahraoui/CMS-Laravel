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
        $participant= new participant();
        $participant->nomsuper = $request->input('nomsuper');
        $participant->rolesuper = $request->input('rolesuper');
        $participant->nomPP = $request->input('nomPP');
        $participant->rolePP = $request->input('rolePP');
        $participant->nomSP = $request->input('nomSP');
        $participant->roleSP = $request->input('roleSP');
        $participant->nomTP = $request->input('nomTP');
        $participant->roleTP = $request->input('roleTP');

   
$participant->projet_id = $request->input('projet_id'); 


      

      

       $participant->save();
                
        
        
        return redirect('projets');
    }
}


            
  



    