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

   if(\request('value')){
       $value = \request('value');
       for($i=0; $i < $value; $i++){

        DB::table('participants')->insert(
            ['Nom' => $request->Input('Nom'.$i), 'Role' => $request->Input('Role'.$i), 'projet_id' => $request->input('projet_id')]
        );
       }
   }        
        
        return redirect('projets');
    }
}


            
  



    