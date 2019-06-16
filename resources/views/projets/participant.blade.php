@extends('layouts.app')

@section('content')

<body>


<form method="post" action="{{url('participant')}}" enctype="multipart/form-data">
{{csrf_field()}}

    
<div>
         
                

    <div class="form-group">

         <label for="">Nom</label>
     <input type="text" name ="nom" class="form-control">

     <div class="input-group control-group increment" >
          <input type="text" name="nom" class="form-control">
          <div class="input-group-btn"> 
            <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
          </div>
        </div>
        <div class="clone hide">
          <div class="control-group input-group" style="margin-top:10px">
            <input type="text" name="nom" class="form-control">
            <div class="input-group-btn"> 
              <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
            </div>
          </div>
        </div>
             
     </div>

             
    
    <div class="form-group">
        <select id="list" class="form-control" name="role"  onchange="getSelectValue();">
            <option value="value">Choisir le rôle</option>
            <option value="Maitre A">Maitre A</option>
            <option value="Maitre B">Maitre B</option>
            <option value="Maitre C">Maitre C</option>
        </select>

    </div>

<input name="projet_id" hidden="hidden" value="{{ $data4 }}">

</div>

<button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

</form>





<script>
 
 function getSelectValue()
 {
     var selectedValue = document.getElementById("list").value;
     console.log(selectedValue);
 }
 getSelectValue();

 
 
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
    

@endsection






