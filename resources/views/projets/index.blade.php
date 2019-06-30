@extends('layouts.master')

@section('content')
<html>
<head>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
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


                    <a id="fares" data-value='{{$projet->id}}' style="background-color: black; border-radius: 25px;"type="submit" class='btn btn-danger fares'>Supprimer</a>

                   

                    
                   
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

<script> src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/5.0.7/sweetalert2.min.js"</script>
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  <script>        


  

    

  $('.fares').on('click', function(e){
   
    e.preventDefault();
    Swal.fire({
  title: 'Etes vous sur ?',
  text: "Ca ne sera pas possible de revenir en arrière!",
  type: 'Attention',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Oui, supprimes moi ca !'
}).then((result) => {
  if (result.value) {

    Swal.fire('Supprimé !','Votre projet a été supprimé.','success').then(function(){
        location.reload();
    });
    



    var idprojet = $(this).data('value');

    $.ajax({
            type: 'GET',
            url: 'deleteprojets',
            data: {
                idprojet: idprojet,
            },
            success: function(response){
                console.log(response);
                $('#secondData').html(response);
            }
        });

  }
  
})



});
    

    
       </script>


</body>
</html>






@endsection
