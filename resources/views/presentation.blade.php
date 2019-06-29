
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


  <div class="presentation">

      <form method="post" action="{{url('presentation')}}" enctype="multipart/form-data">
                  {{csrf_field()}}

        <h2>Ajoutez les 3 images de présentation</h2>

          <div class="custom-file mb-3" style="margin-top:10px">
            <input type="file" name="presentation[]" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Choose file</label>
          </div>

       
          <div class="custom-file mb-3" style="margin-top:10px">
            <input type="file" name="presentation[]" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Choose file</label>
          </div>

         
          <div class="custom-file mb-3" style="margin-top:10px">
            <input type="file" name="presentation[]" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Choose file</label>
          </div>

  </div>
          


  <div class="container, " style="margin-left : 10px">  

          <h2>Ajoutez le nombre de superviseurs  </h2>  
          <form action="./" method="GET">
            <div class="row justify-content-center">
              <div class="col-md-8">
                <div class="card" style="padding: 105px;">

                  <select name="superviseur" id="list" class="form-control">
                    <option value="value">Choisir le nombre de superviseurs</option>
                      @for($i=1; $i<6; $i++)

                        <option value="{{$i}}"> {{$i}} Superviseur</option>
                     @endfor
                  </select>

                </div>  
              </div>  
            </div>
        
  </div>



        @if(isset($data4))

        <input type="number" hidden="hidden" value = "{{$data4}}" name="projet_id">
        <button type="submit" class="btn btn-primary" style="margin: 50px auto; display:flex; justify-content: center;">Suivant</button>

        @endif

          </form>

      </form>  


  </div>
  
        


<script type="text/javascript">

 

// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});

 
</body>

</html>
@endsection


