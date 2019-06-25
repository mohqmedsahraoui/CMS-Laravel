<html lang="en">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">  
    
  <title>Ajout de photos et de participants</title>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

</head>

<body>

  <div class="container">

      @if (count($errors) > 0)

      <div class="alert alert-danger">

        <strong>Whoops!</strong> There were some problems with your input.<br><br>

        <ul>

          @foreach ($errors->all() as $error)

              <li>{{ $error }}</li>

          @endforeach

        </ul>

      </div>

      @endif
        @if(session('success'))
  <div class="alert alert-success">
{{ session('success') }}
 </div>
@endif

<h3 class="jumbotron">Ajout de photos et de participants au projet</h3>
<div class="carousel">

<h2>Ajoutez les photos du carousel</h2>

<form method="post" action="{{url('photo')}}" enctype="multipart/form-data">
  {{csrf_field()}}
        <div class="input-group control-group increment" >
 <input type="file" name="carousel[]" class="form-control">

          <div class="input-group-btn">

            <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>

          </div>

        </div>

        <div class="clone hide">

          <div class="control-group input-group" style="margin-top:10px">

            <input type="file" name="carousel[]" class="form-control">

            <div class="input-group-btn">

              <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>

            </div>

          </div>

        </div>

      </div>

 

          <!--ESPAAAAAACCCCCCCCCCCCEEEEE-->

 


 

    <div class="presentation">

 

          <h2>Ajoutez les images de présentation</h2>

 

        <div class="input-group control-group increment" >

          <input type="file" name="presentation[]" class="form-control">

          <div class="input-group-btn">

            <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
               </div>
                </div>

        <div class="clone hide">
<div class="control-group input-group" style="margin-top:10px">
            <input type="file" name="presentation[]" class="form-control">
            <div class="input-group-btn">

              <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>

            </div>

  
</div>

          </div>

        </div>

        <div class="container, " style="margin-left : 280px">    
        <form action="./" method="GET">
<div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card" style="padding: 105px;">

        <select name="participant" id="list" class="form-control">
            <option value="value">Choisir le nombre de participants</option>
            @for($i=1; $i<6; $i++)

            <option value="{{$i}}"> {{$i}} Superviseur</option>
            @endfor
        </select>

  </div>  
</div>  
</div>
        
 </div>

 


 

       

        @if(isset($data2))




        <input type="number" hidden="hidden" value = "{{$data2}}" name="projet_id">
        <button type="submit" class="btn btn-primary" style="margin-top:10px">Suivant</button>



        @endif


       

 

  </form>      

  </div>

 

<script type="text/javascript">

 

    $(document).ready(function() {

 

      $(".btn-success").click(function(){

          var html = $(".clone").html();

          $(".increment").after(html);

      });

 

      $("body").on("click",".btn-danger",function(){

          $(this).parents(".control-group").remove();

      });

 

    });

 

</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  

</body>

</html>