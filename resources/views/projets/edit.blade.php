@extends('layouts.app')

@section('content')

@if(count($errors))

    <div class="alert alert-danger" role="alert">
    
    <ul>
    @foreach($errors->all() as $message)

    <li>{{ $message}}</li>
     @endforeach
    </ul>
    </div>
    @endif

<div class="container">
    <div class="row">
        <div class="col-md-12">
        <form action="{{ url('projets/'.$projet->id)}}" method="post">
        <input type="hidden" name="_method" value="PUT">

        {{ csrf_field() }}
            <div class="form-group">
            <label for="">Titre</label>
            <input type="text" name="titre" class="form-control" value="{{$projet -> titre}}">
            </div>

            <div class="form-group"> 
            <label for="">Description</label>
            <textarea  name="description" class="form-control">{{$projet -> description}}</textarea>
            </div>

            <div class="form-group">
            
            <input type="submit" name="présentation" class="form-control btn btn-danger" value="Modifier">
            </div>


            


        </form>
        </div>
    </div>
</div>






@endsection