@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12">
        <form action="{{ url('projets')}}" method="post" enctype="multipart/form-data" file = "true">

        {{ csrf_field() }}

           <div class="form-group">
            <label for="">Titre</label>
            <input type="text" name="titre" placeholder="Exemple : Projet Cesi" class="form-control @if($errors->get('titre'))  is-invalid  @endif" value="{{old ('titre')}}">

            @if($errors->get('titre'))
                    @foreach($errors->get('titre') as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                @endif
      <!--bonjour-->


           </div>

            <div class="form-group ">
          <label for="">Introduction</label>
          <textarea  name="intro" placeholder="Exemple : Ce projet est ..." class="form-control @if($errors->get('intro'))  is-invalid  @endif ">{{old ('intro')}}</textarea>
          
          @if($errors->get('intro'))
                  @foreach($errors->get('intro') as $message)
                      <li>{{ $message }}</li>
                  @endforeach
              @endif

          </div>


          <div class="form-group ">
            <label for="">Objectif</label>
            <textarea  name="objectif" placeholder="Exemple : L'objectif de cette présentation est de ..." class="form-control @if($errors->get('objectif'))  is-invalid  @endif ">{{old ('objectif')}}</textarea>
            
            @if($errors->get('objectif'))
                    @foreach($errors->get('objectif') as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                @endif

            </div>

          
            <div class="form-group ">
            <label for="">Description</label>
            <textarea  name="description" placeholder="Exemple : L'objectif de cette présentation est de ..." class="form-control @if($errors->get('description'))  is-invalid  @endif ">{{old ('description')}}</textarea>
            
            @if($errors->get('description'))
                    @foreach($errors->get('description') as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                @endif

            </div>

            <div class="dropdown">

  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

    Dropdown

  </button>

  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">

    <button class="dropdown-item" type="button">Maitre A</button>

    <button class="dropdown-item" type="button">Maitre B</button>

    <button class="dropdown-item" type="button">Maitre C</button>

  </div>

</div>

 
          


           
            <div class="form-group">
            
            <input type="submit" name="présentation" class="form-control btn btn-primary" value=Suivant>
            </div>
            <!-- 
            <a class="btn btn-primary" href="{{ url('projet/photo') }}" role="button">Next</a>  --> 
           
            


            


        </form>
        </div>
    </div>
</div>






@endsection