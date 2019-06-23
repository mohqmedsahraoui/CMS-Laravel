@extends('layouts.master')

@section('content')



<div class="container" style="margin-top: 100px;">
    <div class="row">
        <div class="col-md-12">

    @if (session()->has ('success'))

    <div class="alert alert-success">
    {{session() ->get('success')}}
    
    </div>

    @endif

    <h1 class="text-success" style="text-align: center;">

</h1>
        <!-- Search form -->

        <h1>La liste des projets</h1>
        <div class="pull-right" align="right">
        <a href="{{url('projets/create')}}" class="btn btn-success">Nouveau projet</a>
        </div>
    
        <div class="md-form mt-0">
  <input class="form-control" type="text" onkeyup="search()" id="search" placeholder="Search" aria-label="Search">
</div>
        <table class="table getData">
           <head>
            <tr>
                <th style="width: 300px"> Title </th>

                <th style="width: 400px; display:inline-block;">Presentation</th>
                <th style="width: 200px">Date<i class="far fa-arrow-up"></i><i class="far fa-arrow-down"></i></th>
                <th style="width: 300px">actions</th>

            </tr>
            </head>

            <tbody>
            @foreach($projets as $projet)
                <tr>
                    <td>{{$projet ->titre}}<br> {{ $projet->user->name}}</td>
                    <td>{{$projet ->description }}</td>
                    <td>{{$projet ->created_at}}</td>
                    <td>
                    
                    
                    <form action="{{url('projets/'.$projet->id)}}" method="post">


                    {{csrf_field() }}
                    {{method_field ('DELETE')}}

                    <a href="{{url('projets/view?idprojet='.$projet->id)}}"class='btn btn-primary'>Details</a>
                    <a href="{{url('projets/' .$projet->id.'/edit')}}" class='btn btn-default'>Editer</a>

                    <button type="submit" class='btn btn-danger'>Supprimer</button>
                   
                    </form> 
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <table class="table generateData" style="display: none;">
           <head>
            <tr>
                <th style="width: 300px"> Title </th>

                <th style="width: 400px; display:inline-block;">Presentation</th>
                <th style="width: 200px">Date</th>
                <th style="width: 300px">actions</th>

            </tr>
            </head>

            <tbody id="secondData">

            </tbody>
        </table>
        </div>
    </div>
</div>

<script>   
    function search(){
        var search = $('#search').val();
        if(search){
            $('.getData').hide();
            $('.generateData').show();
        }else{
            $('.getData').show();
            $('.generateData').hide();  
        }
        $.ajax({
            type: 'GET',
            url: '/searchData',
            data: {
                search: search,
            },
            success: function(response){
                console.log(response);
                $('#secondData').html(response);
            }
        });
    }

</script>






@endsection