<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use App\Projet;
use App\Photo;
use App\Form;
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
      $titre = $projet->titre = $request->input('titre');
       $projet->description = $request->input('description');
       $projet->intro = $request->input('intro');
       $projet->objectif = $request->input('objectif');

       $projet->user_id = Auth::user()->id;

       $projet->save();

        session()->flash ('success', 'Le projet a bien été enregsitré');

   $data = DB::table('projets')->whereRaw('id')->get('id')->last();
   $data2 = implode("/n", array_flatten($data));
    return view('photo', ['data2' => $data2 ]);
    
       
 
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


        public function detail(){
            $getProjetInfos = DB::table('projets')->where('projets.id', \request('idprojet'))
                        ->join('photos', 'projets.id', '=', 'photos.projet_id')
                        ->join('superviseurs', 'projets.id', '=', 'superviseurs.projet_id')
                        ->get();

            $getSup = DB::table('projets')->where('projets.id', \request('idprojet'))
                        ->join('superviseurs', 'projets.id', '=', 'superviseurs.projet_id')
                        ->get();

            $getProjet = DB::table('projets')->where('id', \request('idprojet'))->first();
            return view('front', ['getProjet' => $getProjet, 'getProjetInfos' => $getProjetInfos],['getProjet' => $getProjet, 'getSup' => $getSup] );

           
        }

}
  

