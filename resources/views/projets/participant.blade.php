@extends('layouts.app')

@section('content')

<body>


<form method="post" action="{{url('participant')}}" enctype="multipart/form-data">

    
<div>
         
                

    <div class="form-group">

         <label for="">Nom</label>
     <input type="text" name ="nom" class="form-control">
             
     </div>

             
    
    <div class="form-group">
        <select id="list" class="form-control"  onchange="getSelectValue();">
            <option value="value">Choisir le rôle</option>
            <option value="Maitre A">Maitre A</option>
            <option value="Maitre B">Maitre B</option>
            <option value="Maitre C">Maitre C</option>
     
        </select>

    </div>



</div>
<input type="number" hidden="hidden" value = "{{$fares2}}" name="projet_id2" >

<button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

</form>





<script>
 
 function getSelectValue()
 {
     var selectedValue = document.getElementById("list").value;
     console.log(selectedValue);
 }
 getSelectValue();

</script>

</body>
    

@endsection


