<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;


use App\Presentation;
use Illuminate\Support\Facades\DB;

class PresentationController extends Controller
{
     public function create()
    {
        return view('presentation');
    }

    public function store(Request $request)
    {

    if($request->hasfile('presentation'))
         {
          

            foreach($request->file('presentation') as $image2)
            {


                $presentation= new presentation();
                $name=$image2->getClientOriginalName();
                $image2->move(public_path().'/images/presentation', $name);  
                $data = $name;
                $presentation->presentation=$data;
                $presentation->projet_id = $request->input('projet_id');
                $presentation->save();
                $projet = $request ->input('projet_id');
            

            }

         }
         global $projet;

         $getValue = $request->Input('superviseur');
         $data5 = DB::table('projets')->whereRaw('id')->get('id')->last();
         $data6 = implode("/n", array_flatten($data5));
         return view ('projets.superviseur', ['getValue'=>$getValue, 'data6' => $data6]);

}

}
