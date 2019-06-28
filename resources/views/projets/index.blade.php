@extends('layouts.master')

@section('content')
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


<style type="text/css">
    .main {
    width: 50%;
    margin: 70px auto;
}


.has-search .form-control {
    padding-left: 2.375rem;
}

.has-search .form-control-feedback {
    position: absolute;
    z-index: 2;
    display: block;
    width: 2.375rem;
    height: 2.375rem;
    line-height: 2.375rem;
    text-align: center;
    pointer-events: none;
    color: #aaa;
}
</style>


<div class="container" style="margin-top: 130px; width: 100%;"  >
        <div class="col-md-12">

    @if (session()->has ('success'))

    <div class="alert alert-success">
    {{session() ->get('success')}}
    
    </div>

    @endif

    <h1 class="text-success" style="text-align: center;"></h1>
        <!-- Search form -->

    <h1 style="text-align: center;
               ">MES PROJETS</h1>

    <div class=" col-lg-2 col-lg-offset-4 " style="margin: 50px auto; display: flex; justify-content: center; "  >
        <a href="{{url('projets/create')}}" class="btn btn-success">Nouveau projet</a>
    </div>
    
<div style="width: 100%; margin-top: 50px;" >

    <table class="table getData table-striped table-responsive-md btn-table"  >
            <div class="main">
                <div class="input-group" style=" " > 
                    <input class="form-control" type="text" onkeyup="search()" id="search" placeholder="Rechercher un projet" aria-label="Search">
                    <button class="btn btn-secondary" type="button">
                        <i class="fa fa-search"></i>
                    </button>

                </div>
            </div>

            <caption>CDTA</caption>

           <head>
            <tr>
                <th style="width: 200px ; text-align: center;" >TITRE</th>

                <th style="max-width: 300px; width: 100px; display:inline-block; text-align: center;">PRESENTATION</th>
                
                <th style="width: 300px; text-align: center;">ACTIONS</th>

            </tr>
            </head>

            <tbody>
            @foreach($projets as $projet)
                <tr>
                    <td>{{$projet ->titre}}<br> <span style="opacity: 0.5" > {{ $projet->user->name}}</span></td>
                    <td>{{$projet ->description }}</td>
                    
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
    </div>



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

</div>


<footer>
  <div class="container">
    <div class="small text-center text-muted">Copyright &copy; 2019 - CDTA</div>
  </div>
</footer>

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