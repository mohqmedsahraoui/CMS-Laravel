<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
Route::get('/', function () {
    return view('front.accueil');
});
Auth::routes();

Route::get('/home', 'ProjetController@index')->name('home');

Route::get('projets', 'ProjetController@index');
Route::get('projets/create', 'ProjetController@create');

Route::post('projets', 'ProjetController@store');

Route::get('projets/{id}/edit', 'ProjetController@edit');

Route::put('projets/{id}','ProjetController@update');

Route::delete('projets/{id}', 'ProjetController@destroy');

Route::get('participant','ParticipantController@create');
Route::post('participant','ParticipantController@store');

Route::get('photo','PhotoController@create');
Route::post('photo','PhotoController@store');

Route::get('logout', 'ProjetController@logout');

Route::get('/front', function() {
    return view('front');
} );

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








