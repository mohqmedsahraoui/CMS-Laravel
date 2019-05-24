<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Form;

class FormController extends Controller
{

    // FormController.php

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

                'filename' => 'required',
                'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);
        
        if($request->hasfile('filename'))
         {

            foreach($request->file('filename') as $image)
            {

                $form= new Form();
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/images/', $name);  
                $data = $name;
                $form->filename=$data;
                $form->save();
            }
         }

         
         
        
       

        return back()->with('success', 'Your images has been successfully');
    }

}






