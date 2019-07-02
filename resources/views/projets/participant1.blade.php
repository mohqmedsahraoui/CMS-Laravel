@extends('layouts.master')

@section('content')


@if(!isset($participants2))
<h3 style="margin-top:100px;">Votre projet a été crée avec succés<a type="submit" style="color:white; border-radius: 25px;"  class='btn btn-success' href="{{url('projets')}}">retourner a la liste des projets</a></h3>
@else
<div class="container" style="margin-top:100px;">


  <div class="row justify-content-center">
        <div class="col-md-8" >
         <h3 style="text-align: center;">Ajoutez le(s) participant(s) du second superviseur</h3>
            <div class="card" >

           
  
            <form method="post" action="{{url('participants/store?value2='.$participants2.'&value3='.$participants3.'&value4='.$participants4.'&value5='.$participants5.'&superviseurid2='.$superviseurid2.'&superviseurid3='.$superviseurid3.'&superviseurid4='.$superviseurid4.'&superviseurid5='.$superviseurid5.'&projet_id='.$projet_id)}}" enctype="multipart/form-data">
{{ csrf_field() }}
@for($i=1; $i<$participants2 + 1; $i++)

  <div class="form-group row" style="padding:40px;">
    <label for="nomsup" class="col-sm-2 col-form-label">Nom du participant {{$i}}</label>
    <div class="col-sm-10">
      <input type="text" name="Nom{{$i}}" class="form-control" id="nom" >
    </div>
</div>
    @endfor


<div class="form-group row">
  

  
  <div class="form-group row" style="margin: 50px auto; display:flex; justify-content: center;">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-success">Suivant</button>
      </div>
    </div>
   </div>


    
  </div>
  </div>
  </div>
  </div>
</div>


</form>
@endif
@endsection

