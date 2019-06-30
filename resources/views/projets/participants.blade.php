@extends('layouts.master')

@section('content')
@if(!isset($participants1))
<h2>Votre projet a ete créé avec succes <a href="{{url('projets')}}"> retourner a la liste des projets</a></h2>
@else
<div class="container" style="margin-top:100px;">

  <div class="row justify-content-center">
        <div class="col-md-8" >
         <h3 style="text-align: center;">Ajoutez le(s) participant(s) du premier Superviseur</h3>
         <br>
            <div class="card" >
          
            <form method="post" action="{{url('participants/store?value1='.$participants1.'&value2='.$participants2.'&value3='.$participants3.'&value4='.$participants4.'&value5='.$participants5.'&superviseurid1='.$superviseurid1.'&superviseurid2='.$superviseurid2.'&superviseurid3='.$superviseurid3.'&superviseurid4='.$superviseurid4.'&superviseurid5='.$superviseurid5.'&projet_id='.$projet_id)}}" enctype="multipart/form-data">
{{ csrf_field() }}
@for($i=1; $i<$participants1 + 1; $i++)

  <div class="form-group row" >
    <label for="nomsup" class="col-sm-2 col-form-label">Nom du participant {{$i}}</label>
    <div class="col-sm-10">
      <input type="text" name="Nom{{$i}}" class="form-control" id="nom" >
    </div>
</div>
    @endfor


  

  
  <div class="form-group row" style="margin-left:290px;">
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
</div>
</form>
@endif
@endsection

