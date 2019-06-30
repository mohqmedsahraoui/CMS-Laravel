<?php

namespace App\Http\Controllers;
use App\Superviseur;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SuperviseurController extends Controller
{
    
    public function create()
    {
        $data3 = DB::table('projets')->whereRaw('id')->get('id')->last();
        $data4 = implode("/n", array_flatten($data3));
        return view('projets.superviseur', ['data4' => $data4]);
    }

    public function store(Request $request)
    {
      /** VERIFICATION DE LA VARIABLE URL QUI CONTIENT LE NOMBRE DE SUPERVISEURS SOUHAITéS*/
   if(\request('value')){
       $value = \request('value');
       /* BOUCLE POUR INSERER LES DONNéS TANT QUE $i EST INFERIEUR AU NOMBRE DE SUPERVISEURS */
       for($i=0 ; $i < $value; $i++){
        /* INSERSION D UN SUPERVISEUR A CHAQUE TOUR DE BOUCLE*/
        DB::table('superviseurs')->insert(
            ['Name' => $request->Input('Nom'.$i), 'Role' => $request->Input('Role'.$i), 'projet_id' => $request->Input('projet_id')]
        );
        /*RECUPERATION DE L ID DU DERNIER SUPERVISEUR CRéé */

          ${'data'.$i} = DB::table('superviseurs')->whereRaw('id')->get('id')->last();
         ${'superviseur_id'.$i} = implode("/n", array_flatten(${'data'.$i}));
         ${'nbrparticipant'.$i} =  $request->Input('nbrparticipant'.$i);
       } 
       if (isset($nbrparticipant0) && isset($superviseur_id0)) {
          $participants1 = $nbrparticipant0;
          $superviseurid1 = $superviseur_id0;
       }else{
        $participants1 = null;
        $superviseurid1 = null;
       }
       if (isset($nbrparticipant1) && isset($superviseur_id1)) {
          $participants2 = $nbrparticipant1;
          $superviseurid2 = $superviseur_id1;

       }else{
        $participants2 = null;
        $superviseurid2 = null;

       }
       if (isset($nbrparticipant2) && isset($superviseur_id2)) {
          $participants3 = $nbrparticipant2;
          $superviseurid3 = $superviseur_id2;

       }else{
        $participants3 = null;
        $superviseurid3 = null;

       }
       if (isset($nbrparticipant3) && isset($superviseur_id3)) {
          $participants4 = $nbrparticipant3;
          $superviseurid4 = $superviseur_id3;

       }else{
        $participants4 = null;
        $superviseurid4 = null;

       }
       if (isset($nbrparticipant4) && isset($superviseur_id4)) {
          $participants5 = $nbrparticipant4;
          $superviseurid5 = $superviseur_id4;

       }else{
        $participants5 = null;
        $superviseurid5 = null;

       }
       $projet_id0 = DB::table('projets')->whereRaw('id')->get('id')->last();
        $projet_id = implode("/n", array_flatten($projet_id0));
       return view('projets.participants', ['participants1' => $participants1,'participants2' => $participants2, 'participants3' => $participants3, 'participants4' => $participants4, 'participants5' => $participants5, 'superviseurid1' => $superviseurid1, 'superviseurid2' => $superviseurid2, 'superviseurid3' => $superviseurid3, 'superviseurid4' => $superviseurid4, 'superviseurid5' => $superviseurid5, 'projet_id' => $projet_id]);
   }  


    

    }

}
