@extends('layouts.master')

@section('content')


<div class="container"  style="margin-top: 150px; display: flex; justify-content: center;" >
    <div class="row">
        <div class="col-md-12">
        <form action="{{ url('projets/'.$projet->id)}}" method="post">
        <input type="hidden" name="_method" value="PUT">

        {{ csrf_field() }}

           
<h1 style="text-align: center;">Modifier les informations du projet</h1>


    <div class="form-group">
        <h5>Titre</h5>
            <input type="text" name="titre" style="width: 900px; border-radius: 20px; " class="form-control" value="{{$projet -> titre}}" >

                
    </div>



    <div class="form-group ">
          <h5>Introduction</h5>
          <textarea  name="intro" style="width: 900px; border-radius: 20px;" class="form-control">{{$projet -> intro}}</textarea>
          
          @if($errors->get('intro'))
                  @foreach($errors->get('intro') as $message)
                      <li>{{ $message }}</li>
                  @endforeach
              @endif
    </div>

    <div class="form-group ">
            <h5>Objectifs</h5>
            <textarea  name="objectif" style="width: 900px; border-radius: 20px;" class="form-control @if($errors->get('objectif'))  is-invalid  @endif ">{{$projet -> objectif}}</textarea>
            
            @if($errors->get('objectif'))
                    @foreach($errors->get('objectif') as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                @endif

    </div>


    <div  class="form-group ">
            <h5>Description</h5>
            <textarea  name="description" style="width: 900px; border-radius: 20px; border " class=" form-control @if($errors->get('description'))  is-invalid  @endif ">{{$projet -> description}}</textarea>
            
            @if($errors->get('description'))
                    @foreach($errors->get('description') as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                @endif

    </div>

    

        <input type="submit" class="button-success pure-button" style=" background: rgb(28, 184, 65);color: white; margin: 50px auto; display: flex; justify-content: center; border-radius: 12px;" name="présentation" class="form-control btn btn-primary" value=Modifier>
            </div>
            
        </form>

        </div>
    </div>
</div>





@endsection