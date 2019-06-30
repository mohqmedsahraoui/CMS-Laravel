@extends('layouts.app')

@section('content')
@if(!isset($participants4))
<h2>Votre projet a ete créé avec succes <a href="{{url('projets')}}"> retourner a la liste des projets</a></h2>
@else

  <div class="row justify-content-center" >
        <div class="col-md-8" >
         <h3 style="text-align: center;">Ajoutez le(s) participant(s)</h3>
            <div class="card" >
          
            <form method="post" action="{{url('participants/store?value4='.$participants4.'&value5='.$participants5.'&superviseurid4='.$superviseurid4.'&superviseurid5='.$superviseurid5.'&projet_id='.$projet_id)}}" enctype="multipart/form-data">
{{ csrf_field() }}
@for($i=1; $i<$participants4 + 1; $i++)

  <div class="form-group row" >
    <label for="nomsup" class="col-sm-2 col-form-label">Nom du participant {{$i}}</label>
    <div class="col-sm-10">
      <input type="text" name="Nom{{$i}}" class="form-control" id="nom" >
    </div>
</div>
    @endfor


<div class="form-group row" style="text-align: center;">
  

  
  <div class="form-group row" style="text-align: center;">
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

