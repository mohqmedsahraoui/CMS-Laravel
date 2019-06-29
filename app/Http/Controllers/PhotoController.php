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
        
        if($request->hasfile('carousel') )
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

            
         }
         global $projet;

         $data3 = DB::table('projets')->whereRaw('id')->get('id')->last();
         $data4 = implode("/n", array_flatten($data3));
         return view ('presentation', ['data4' => $data4]);

        
    }

}



