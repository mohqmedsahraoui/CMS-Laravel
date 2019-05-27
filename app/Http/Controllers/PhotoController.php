<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Photo;


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

        $this->validate($request, [

                'source' => 'required',
                'source.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);
        
        if($request->hasfile('source'))
         {

            foreach($request->file('source') as $image)
            {


                $photo= new photo();
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/images/', $name);  
                $data = $name;
                $photo->source=$data;
                $photo->save();

            }
         }

         
         
        
       

        return back()->with('success', 'Your images has been successfully');
    }

}



