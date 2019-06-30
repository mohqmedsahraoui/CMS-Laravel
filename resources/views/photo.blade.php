@extends('layouts.master')

@section('content')


<html lang="en">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">  
    
  <title>Ajout de photos et de participants</title>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>   
</head>

<body>


  <div class="container" style="margin-top:100px;">


 

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

<h2 style="text-align:center;">Ajoutez les images du carousel :</h2>

<br>
<br>


    <div class="carousel">
          <form method="post" action="{{url('photo')}}" enctype="multipart/form-data">
              {{csrf_field()}}


    
      <div class="custom-file mb-3 fares" style="" >

      <div class="input-group-addon" style="display:flex; justify-content: center;"> 
                <a href="javascript:void(0)" class="btn btn-success addMore"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span>Ajouter</a>
            </div>
          
          <br>
         
     
    </div>
    
    
    
    <br>
    <br>
 

<!-- copy of input fields group -->
<div class=" custom-file mb-3 clone hide" hidden="true">
<br>
    <div class="input-group control-group"  onclick="ChangeName()">
    <input type="file" name="carousel[]" class="custom-file-input" id="customFile"/>

        <label class="custom-file-label" for="customFile">Choisir un fichier</label>

        <div class="input-group-addon"> 
            <a href="javascript:void(0)" class="btn btn-danger remove"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span>Retirez</a>
        </div>
    </div>
</div> 
</div> 

      
  </div>



        @if(isset($data2))

        <input type="number" hidden="hidden" value = "{{$data2}}" name="projet_id">

        <button type="submit" class="btn btn-primary" style=" margin: 50px auto; display:flex; justify-content: center;">Suivant</button>

        @endif

        </form>      
        </form>      

        

  </div>

  <h2 style="text-align:center;">Voici à quoi ressemble un carousel :</h2>

  <div id="carouselExampleControls" data-interval="500"class="carousel slide" data-ride="carousel" style="width:50%; margin:50px auto;">
  <div class="carousel-inner" >
    <div class="carousel-item active" >
      <img class="d-block w-100" src="/images/1.jpg" style="height:55vh;" alt="First slide">
    </div>
    <div class="carousel-item"  >
      <img class="d-block w-100" src="/images/2.jpg" style="height:55vh;" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/images/contact-bg.jpg" style="height:55vh;" alt="First slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

  
        
 

<script type="text/javascript">

 
$(document).ready(function() {

 

$(".addMore").click(function(){

    var html = $(".clone").html();

    $(".fares").after(html);

});



$("body").on("click",".remove",function(){

    $(this).parents(".control-group").remove();

});



});


   
function ChangeName(){
  

// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});



}


 

</script>




</body>

</html>
@endsection


