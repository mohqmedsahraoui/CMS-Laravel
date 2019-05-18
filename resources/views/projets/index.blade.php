@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-12">

    @if (session()->has ('success'))

    <div class="alert alert-success">
    {{session() ->get('success')}}
    
    </div>

    @endif

    <h1 class="text-success" style="text-align: center;">
<?php
echo "Today is " . date("l"). "  " . date("d /m /Y")   . "<br>";
?>
</h1>
        
        <h1>La liste des projets</h1>
        <div class="pull-right" align="right">
        <a href="{{url('projets/create')}}" class="btn btn-success">Nouveau projet</a>
        </div>
        <table class="table">
           <head>
            <tr>
                <th style="width: 300px"> Title </th>

                <th style="width: 400px; display:inline-block;">Presentation</th>
                <th style="width: 200px">Date</th>
                <th style="width: 300px">actions</th>

            </tr>
            </head>

            <body>
            @foreach($projets as $projet)
                <tr>
                    <td>{{$projet ->titre}}<br> {{ $projet->user->name}}</td>
                    <td>{{$projet ->description }}</td>
                    <td>{{$projet ->created_at}}</td>
                    <td>
                    
                    
                    <form action="{{url('projets/'.$projet->id)}}" method="post">


                    {{csrf_field() }}
                    {{method_field ('DELETE')}}

                    <a href=""class='btn btn-primary'>Details</a>
                    <a href="{{url('projets/' .$projet->id.'/edit')}}" class='btn btn-default'>Editer</a>

                    <button type="submit" class='btn btn-danger'>Supprimer</button>
                   
                    
                    
                    
                    
                    </form>
                    
                    
                    
                   
                    </td>

                </tr>
                @endforeach
            </body>
        </table>
        </div>
    </div>
</div>








@endsection