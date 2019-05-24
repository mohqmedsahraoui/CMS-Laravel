<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Projet;
use App\Photo;
use Auth;

use Image;


use App\Http\Requests\cmsRequest;

class ProjetController extends Controller
{
    //Lister les différents ptojets 


    public function __construct() {

        $this->middleware('auth');
    }



    public function index() {
        $listprojet = Auth::user()->projets;
        return view('projets.index', ['projets' => $listprojet]);


    }

    public function create () {

        return view('projets.create');


    }

    public function store (cmsRequest $request) {


      
    //Instance of objet
       $projet = new Projet ();

    

       

    //Request DataBase

        

    
       $projet->titre = $request->input('titre');
       $projet->description = $request->input('description');
       $projet->user_id = Auth::user()->id;

       $projet->save();
      
       

        session()->flash ('success', 'Le projet a bien été enregsitré');

       return redirect('photo');
        



    }

    public function edit ($id) {
        $projet = Projet::find($id); 
        return view ('projets.edit', ['projet' => $projet]);

            
        }

    public function update(cmsRequest $request, $id) {
        $projet = Projet::find($id);

        $projet->titre = $request->input('titre');
        $projet->description= $request->input('description');
        $projet->save();

        return redirect('projets');


    }

        public function destroy(Request $request, $id){

            $projet = Projet::find($id);

            $projet->delete();

            return redirect('projets');
        }

}
  

