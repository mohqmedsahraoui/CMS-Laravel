<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
Route::get('/', function () {
    return view('front.accueil');
});
Auth::routes();

Route::get('/home', 'ProjetController@index')->name('home');
Route::get('/design', function() {
    return view('design');
});

Route::get('projets', 'ProjetController@index');
Route::get('projets/create', 'ProjetController@create');


Route::post('projets', 'ProjetController@store');

Route::get('projets/{id}/edit', 'ProjetController@edit');

Route::put('projets/{id}','ProjetController@update');

Route::delete('projets/{id}', 'ProjetController@destroy');

Route::get('superviseur','SuperviseurController@create');
Route::post('superviseur/store','SuperviseurController@store');

Route::get('photo','PhotoController@create');
Route::post('photo','PhotoController@store');

Route::get('deleteprojets', function(){


    DB::table('projets')->where('id',\request('idprojet'))->delete();
    
    return redirect('projets');
    
    });
    

Route::get('presentation','PresentationController@create');
Route::post('presentation','PresentationController@store');

Route::get('logout', 'ProjetController@logout');

Route::get('/front', function() {
    return view('front');
} );
Route::post('participants/store', 'Participant2Controller@store');

Route::get('projets/view', 'ProjetController@detail');

Route::get('/searchData', function(Request $request){
        if($request->search){
            $searchs = DB::table('projets')->where('titre', 'like', '%'.$request->search.'%')->get();

            if($searchs){
                foreach($searchs as $key => $search){
                    $csrf = csrf_field();
                    $method = method_field('DELETE');
                    return "<tr>
                    <td>".$search ->titre."<br></td>
                    <td>".$search ->description."</td>
                    <td>".$search ->created_at."</td>
                    <td>
                    <form action='projets/".$search->id."' method='post'>
                    $csrf
                    $method
                    <a href='projets/view?idprojet=".$search->id."'class='btn btn-primary'>Details</a>
                    <a href='projets/".$search->id."/edit' class='btn btn-default'>Editer</a>
                    <button type='submit' class='btn btn-danger'>Supprimer</button> 
                    </form> 
                    </td>
                </tr>";
                }
            }
        }
});








