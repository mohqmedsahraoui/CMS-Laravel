@extends('layouts.app')

@section('content')

<body>
    
<div>
         
                
         <div class="form-group">

         <label for="">Nom</label>
     <input type="text" class="form-control">
             
     </div>

             
    
     <div class="form-group">
 <select id="list" class="form-control"  onchange="getSelectValue();">
 <option value="value">Choisir le rôle</option>
     <option value="Maitre A">Maitre A</option>
     <option value="Maitre B">Maitre B</option>
     <option value="Maitre C">Maitre C</option>
     
 </select>
<script>
 
 function getSelectValue()
 {
     var selectedValue = document.getElementById("list").value;
     console.log(selectedValue);
 }
 getSelectValue();

</script>

</div>

</div>

</body>
    

@endsection


