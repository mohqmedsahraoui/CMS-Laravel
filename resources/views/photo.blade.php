<html lang="en">
<head>
  <title>Laravel Multiple File Upload Example</title>
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

    <h3 class="jumbotron">Laravel Multiple File Upload</h3>


    <div class="carousel">

    <h2>Image Carousel</h2>
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
            <input type="file" name="source[]" class="form-control">
            <div class="input-group-btn"> 
              <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
            </div>
          </div>
        </div>

    </div>

          <!--ESPAAAAAACCCCCCCCCCCCEEEEE-->

    <div class="presentation">

          <h2>Image Presentation</h2>
<form method="post" action="{{url('photo')}}" enctype="multipart/form-data">

  {{csrf_field()}}

        <div class="input-group control-group increment" >
          <input type="file" name="presentation[]" class="form-control">
          <div class="input-group-btn"> 
            <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
          </div>
        </div>
        <div class="clone hide">
          <div class="control-group input-group" style="margin-top:10px">
            <input type="file" name="source[]" class="form-control">
            <div class="input-group-btn"> 
              <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
            </div>
          </div>
        </div>
    
        
    </div>

        

        <input type="number" hidden="hidden" value = "{{$data2}}" name="projet_id" >

        <button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>
        

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
</body>
</html>