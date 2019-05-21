@extends('layouts.app')

@section('content')

<h1>Insertion des Photos</h1>

<div class="container">
    <div class="row">
        <div class="col-md-12">
        <form action="{{ url('projets')}}" method="post" enctype="multipart/form-data" file = "true">

        {{ csrf_field() }}
  
            <div class="form-group">
               <label for="">photo</label>
               <input class="form-control" type="file" name="image">
           </div>
           <input type="text" class="form-control" id="projet" name="projet_id" value="{{\request('oppo')}}" hidden="hidden">

            <div class="form-group">
            
            <input type="submit" name="presentation" class="form-control btn btn-primary" value=Enregistrer>
            </div>

            


            


        </form>
        </div>
    </div>
</div>



@endsection