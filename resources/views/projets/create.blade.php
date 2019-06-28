@extends('layouts.master')

@section('content')
<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style type="text/css">
    
</style>

<body>
    





<div class="container" style="margin-top: 150px; display: flex; justify-content: center;" >
    <div class="row">
        <div class="col-md-12">

        <form action="{{ url('projets')}}" method="post" enctype="multipart/form-data" file = "true" class="pure-form">

        {{ csrf_field() }}

<h1 style="text-align: center;">Information Nécessaire Du Projet</h1>


    <div class="form-group">
        <h5>Titre</h5>
            <input type="text" name="titre" style="width: 900px;" placeholder="Exemple : Projet Cesi" class="pure-input-rounded @if($errors->get('titre'))  is-invalid  @endif" value="{{old ('titre')}}">

                @if($errors->get('titre'))
                    @foreach($errors->get('titre') as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                @endif
                
    </div>



    <div class="form-group ">
          <h5>Introduction</h5>
          <textarea  name="intro" style="width: 900px;" placeholder="Exemple : Ce projet est ..." class="pure-input-rounded @if($errors->get('intro'))  is-invalid  @endif ">{{old ('intro')}}</textarea>
          
          @if($errors->get('intro'))
                  @foreach($errors->get('intro') as $message)
                      <li>{{ $message }}</li>
                  @endforeach
              @endif
    </div>

    <div class="form-group ">
            <h5>Objectifs</h5>
            <textarea  name="objectif" style="width: 900px;" placeholder="Exemple : L'objectif de ce projet est de ..." class="pure-input-rounded @if($errors->get('objectif'))  is-invalid  @endif ">{{old ('objectif')}}</textarea>
            
            @if($errors->get('objectif'))
                    @foreach($errors->get('objectif') as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                @endif

    </div>


    <div  class="form-group ">
            <h5>Description</h5>
            <textarea  name="description" style="width: 900px; " placeholder="Exemple : Description Du Projet " class=" pure-input-rounded @if($errors->get('description'))  is-invalid  @endif ">{{old ('description')}}</textarea>
            
            @if($errors->get('description'))
                    @foreach($errors->get('description') as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                @endif

    </div>

    <div>
          <div class="form-group">
     </div>

<input type="submit" class="button-success pure-button" style=" background: rgb(28, 184, 65);color: white; margin: 50px auto; display: flex; justify-content: center; border-radius: 12px;" name="présentation" class="form-control btn btn-primary" value=Suivant>
            </div>
            <!-- 
            <a class="btn btn-primary" href="{{ url('projet/photo') }}" role="button">Next</a>  --> 

        </form>


        </div>
    </div>
</div>

<footer>
  <div class="container">
    <div class="small text-center text-muted">Copyright &copy; 2019 - CDTA</div>
  </div>
</footer>
</body>

@endsection