@extends('layouts.master')

@section('content')

<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">  
    
  <title>Ajout de photos et de participants</title>

  <link rel="stylesheet" href=  
"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">  
    <script src=  
"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">  
    </script>  
    <script src=  
"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">  
    </script>  
    <script src=  
"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">  
    </script>  
</head>


<div class="container" style="margin-top:100px;">

  <div class="row justify-content-center">
        <div class="col-md-8">
         <h3 style="text-align: center;">Ajoutez le(s) superviseur(s) du projet</h3>
            <div class="card" style="padding: 30px;">
        
            <form method="post" action="{{url('superviseur/store?value='.$getValue)}}" enctype="multipart/form-data">
{{ csrf_field() }}
@for($i=0; $i<$getValue; $i++)

  <div class="form-group row">
    <label for="nomsup" class="col-sm-2 col-form-label">Nom du superviseur</label>
    <div class="col-sm-10">
      <input type="text" name="Nom{{$i}}" class="form-control" style="border-radius: 15px;" id="nom" >
    </div>
    <label for="roleid" class="col-md-2 col-form-label">Choisir un role</label>
  <div class="col-md-10">
      <select class="custom-select" name="Role{{$i}}">
          <option value="">Selectionnez un role existant</option>
          <option value="Maitre de recherche A">Maitre de recherche A</option>
          <option value="Maitre de recherche B">Maitre de recherche B</option>
          <option value="Chargé de recherche">Chargé de recherche</option>
          <option value="Attaché de recherche">Attaché de recherche</option>
          <option value="Chargé d'études">Chargé d'études</option>
          <option value="Ingenieur de recherche conseillé">Ingénieur de Recherche conseillé</option>
          <option value="Ingénieur de Recherche">Ingénieur de Recherche</option>
          <option value="Ingénieur Principal">Ingénieur Principal</option>
          <option value="Ingénieur de soutien de la recherche">Ingénieur de soutien de la recherche</option>
      </select>
  </div>


  <label for="participant" class="col-md-2 col-form-label">N°participants</label>
  <div class="col-md-10">
  <select name="nbrparticipant{{$i}}" id="list2" class="form-control">
            <option value="value">Choisir le nombre de participants</option>
            @for($a=1; $a<21; $a++)
            <option value="{{$a}}">{{$a}}  Participants</option>
            @endfor    
        </select>
  </div>


    @endfor
    <input name="projet_id" hidden="hidden" value="{{ $data6 }}">

  
  <div class="form-group row" style="text-align: center; display: flex; justify-content: center;">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-success">Suivant</button>
      </div>
    </div>


    
  </div>
  </div>
  </div>
  </div> 

  
  



</form>

@endsection

