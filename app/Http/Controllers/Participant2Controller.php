<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Participant2Controller extends Controller
{
    public function store(Request $request)
    {
        if (\request('value1')) {
            for ($i=1; $i < \request('value1') + 1; $i++) { 
                DB::table('participants')->insert(
                     ['projet_id' => \request('projet_id'), 'superviseur_id' => \request('superviseurid1'), 'Nom' => $request->Input('Nom'.$i)]
                );
            }

        $participants2 = \request('value2');
        $superviseurid2 = \request('superviseurid2');

        $participants3 = \request('value3');
        $superviseurid3 = \request('superviseurid3');

        $participants4 = \request('value4');
        $superviseurid4 = \request('superviseurid4');

        $participants5 = \request('value5');
        $superviseurid5 = \request('superviseurid5');

            return view('projets.participant1', ['participants2' => $participants2, 'participants3' => $participants3, 'participants4' => $participants4, 'participants5' => $participants5, 'superviseurid2' => $superviseurid2, 'superviseurid3' => $superviseurid3, 'superviseurid4' => $superviseurid4, 'superviseurid5' => $superviseurid5, 'projet_id' => \request('projet_id')]);

        }


            if (\request('value2')) {

            for ($i=1; $i < \request('value2') + 1; $i++) { 
                DB::table('participants')->insert(
                     ['projet_id' => \request('projet_id'), 'superviseur_id' => \request('superviseurid2'), 'Nom' => $request->Input('Nom'.$i)]
                );
            }


            $participants3 = \request('value3');
            $superviseurid3 = \request('superviseurid3');
            
             $participants4 = \request('value4');
            $superviseurid4 = \request('superviseurid4');

            $participants5 = \request('value5');
            $superviseurid5 = \request('superviseurid5');

            return view('projets.participant2', ['participants3' => $participants3, 'participants4' => $participants4, 'participants5' => $participants5, 'superviseurid3' => $superviseurid3, 'superviseurid4' => $superviseurid4, 'superviseurid5' => $superviseurid5, 'projet_id' => \request('projet_id')]);

        }

                if (\request('value3')) {
                    for ($i=1; $i < \request('value3') + 1; $i++) { 
                DB::table('participants')->insert(
                     ['projet_id' => \request('projet_id'), 'superviseur_id' => \request('superviseurid3'), 'Nom' => $request->Input('Nom'.$i)]
                );
            }

             $participants4 = \request('value4');
            $superviseurid4 = \request('superviseurid4');

            $participants5 = \request('value5');
            $superviseurid5 = \request('superviseurid5');

            return view('projets.participant3', ['participants4' => $participants4, 'participants5' => $participants5, 'superviseurid4' => $superviseurid4, 'superviseurid5' => $superviseurid5, 'projet_id' => \request('projet_id')]);

        }



                if (\request('value4')) {
            for ($i=1; $i < \request('value4') + 1; $i++) { 
                DB::table('participants')->insert(
                     ['projet_id' => \request('projet_id'), 'superviseur_id' => \request('superviseurid4'), 'Nom' => $request->Input('Nom'.$i)]
                );
            }


            $participants5 = \request('value5');
            $superviseurid5 = \request('superviseurid5');

            return view('projets.participant4', ['participants5' => $participants5, 'superviseurid5' => $superviseurid5, 'projet_id' => \request('projet_id')]);

        }



                if (\request('value5')) {
            for ($i=1; $i < \request('value5') + 1; $i++) { 
                DB::table('participants')->insert(
                     ['projet_id' => \request('projet_id'), 'superviseur_id' => \request('superviseurid5'), 'Nom' => $request->Input('Nom'.$i)]
                );
            }
        return redirect('projets');

        }
            

    }
}
