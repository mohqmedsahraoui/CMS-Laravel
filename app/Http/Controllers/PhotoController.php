<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;


use App\Photo;
use Illuminate\Support\Facades\DB;
    
class PhotoController extends Controller
{

    // PhotoController.php

/**
     * Store a newly created resource in storage.
     *
    * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        //
        return view('photo');
    }



    public function store(Request $request)

    {

       /* $this->validate($request, [

                'source' => 'required',
                'source.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]); */
        
        if($request->hasfile('carousel') && $request->hasfile('presentation'))
         {
          

            foreach($request->file('carousel') as $image)
            {


                $photo= new photo();
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/images/carousel', $name);  
                $data = $name;
                $photo->carousel=$data;
                $photo->projet_id = $request->input('projet_id');
                $photo->save();
                $projet = $request ->input('projet_id');

            }

            
            foreach($request->file('presentation') as $image2)
            {


                $photo= new photo();
                $name=$image2->getClientOriginalName();
                $image2->move(public_path().'/images/presentation', $name);  
                $data = $name;
                $photo->presentation=$data;
                $photo->projet_id = $request->input('projet_id');
                $photo->save();
                $projet = $request ->input('projet_id');
            

            }
         }
         global $projet;

         $getValue = $request->Input('superviseur');
         $data3 = DB::table('projets')->whereRaw('id')->get('id')->last();
         $data4 = implode("/n", array_flatten($data3));
         return view ('projets.superviseur', ['getValue'=>$getValue, 'data4' => $data4]);

        
    }

}



