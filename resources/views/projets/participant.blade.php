@extends('layouts.app')

@section('content')

<div class="container" style="">

 
  


  @if (\request('un'))
 

  <div class="row justify-content-center">
        <div class="col-md-8">
         <h3 style="text-align: center;">Ajouter le superviseur du projet</h3>
            <div class="card" style="padding: 30px;">
            <form method="post" action="{{url('participant')}}" enctype="multipart/form-data">
{{ csrf_field() }}
  <div class="form-group row">
    <label for="nomsup" class="col-sm-2 col-form-label">Nom du superviseur</label>
    <div class="col-sm-10">
      <input type="text" name="nomsuper" class="form-control" id="nom" >
    </div>

    <label for="roleid" class="col-md-2 col-form-label text-md-right">Choisir un role</label>
  <div class="col-md-10">
      <select class="custom-select" name="rolesuper">
          <option value="">Selectionnez un role existant</option>
          <option value="Maitre A">Maitre A</option>
          <option value="Maitre B">Maitre B</option>
          <option value="Maitre C">Maitre C</option>
      </select>
  </div>
    <input name="projet_id" hidden="hidden" value="{{ $data4 }}">


    <label for="nameLawyer" class="col-sm-2 col-form-label">Nom du premier participant</label>
    <div class="col-sm-10">
      <input type="text" name="nomPP" class="form-control" id="nom" >
    </div>

 <label for="roleid" class="col-md-2 col-form-label text-md-right">Choisir un role</label>
  <div class="col-md-10">
      <select class="custom-select" name="rolePP">
          <option value="">Selectionnez un role existant</option>
          <option value="Maitre A">Maitre A</option>
          <option value="Maitre B">Maitre B</option>
          <option value="Maitre C">Maitre C</option>
      </select>
  </div>
</div>

<div class="form-group row" style="text-align: center;">
  

  <input name="projet_id" hidden="hidden" value="{{ $data4 }}">
  
  <div class="form-group row" style="text-align: center;">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-success">Créer</button>
      </div>
    </div>
                          </div>


    
  </div>
  </div>
  </div>
  </div> 
  
  

@elseif (\request('deux'))
 
<div class="row justify-content-center">
        <div class="col-md-8">
         <h3 style="text-align: center;color:red">Ajouter le superviseur du projet et deux autres participants</h3>
            <div class="card" style="padding: 30px;">
            <form method="post" action="{{url('participant')}}" enctype="multipart/form-data">
{{ csrf_field() }}
  <div class="form-group row">
    <label for="nameLawyer" class="col-sm-2 col-form-label">Nom du superviseur</label>
    <div class="col-sm-10">
      <input type="text" name="nomsuper" class="form-control" id="nom" >
    </div>

    <label for="roleid" class="col-md-2 col-form-label text-md-right">Choisir un role</label>
  <div class="col-md-10">
      <select class="custom-select" name="rolesuper">
          <option value="">Selectionnez un role existant</option>
          <option value="Maitre A">Maitre A</option>
          <option value="Maitre B">Maitre B</option>
          <option value="Maitre C">Maitre C</option>
      </select>
  </div>
    <input name="projet_id" hidden="hidden" value="{{ $data4 }}">


    <label for="nameLawyer" class="col-sm-2 col-form-label">Nom du premier participant</label>
    <div class="col-sm-10">
      <input type="text" name="nomPP" class="form-control" id="nom" >
    </div>

 <label for="roleid" class="col-md-2 col-form-label text-md-right">Choisir un role</label>
  <div class="col-md-10">
      <select class="custom-select" name="rolePP">
          <option value="">Selectionnez un role existant</option>
          <option value="Maitre A">Maitre A</option>
          <option value="Maitre B">Maitre B</option>
          <option value="Maitre C">Maitre C</option>
      </select>
  </div>
  <label for="nameLawyer" class="col-sm-2 col-form-label">Nom du second participant</label>
  <div class="col-sm-10">
      <input type="text" name="nomSP" class="form-control" id="nom" >
    </div>
    <label for="roleid" class="col-md-2 col-form-label text-md-right">Choisir un role</label>
  <div class="col-md-10">
      <select class="custom-select" name="roleSP">
          <option value="">Selectionnez un role existant</option>
          <option value="Maitre A">Maitre A</option>
          <option value="Maitre B">Maitre B</option>
          <option value="Maitre C">Maitre C</option>
      </select>
  </div>

  <div class="form-group row" style="text-align: center;">
  

<input name="projet_id" hidden="hidden" value="{{ $data4 }}">

<div class="form-group row" style="text-align: center;">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-success">Créer</button>
    </div>
  </div>
                        </div>






</div>


    
  </div>
  </div>
  </div>
  </div> 
  
  


@elseif (\request('trois'))
 
<div class="row justify-content-center">
        <div class="col-md-8">
         <h3 style="text-align: center;color:red">Ajouter le superviseur du projet et trois autres participants</h3>
            <div class="card" style="padding: 30px;">
            <form method="post" action="{{url('participant')}}" enctype="multipart/form-data">
{{ csrf_field() }}
  <div class="form-group row">
    <label for="nameLawyer" class="col-sm-2 col-form-label">Nom du superviseur</label>
    <div class="col-sm-10">
      <input type="text" name="nomsuper" class="form-control" id="nom" >
    </div>

    <label for="roleid" class="col-md-2 col-form-label text-md-right">Choisir un role</label>
  <div class="col-md-10">
      <select class="custom-select" name="rolesuper">
          <option value="">Selectionnez un role existant</option>
          <option value="Maitre A">Maitre A</option>
          <option value="Maitre B">Maitre B</option>
          <option value="Maitre C">Maitre C</option>
      </select>
  </div>
    <input name="projet_id" hidden="hidden" value="{{ $data4 }}">


    <label for="nameLawyer" class="col-sm-2 col-form-label">Nom du premier participant</label>
    <div class="col-sm-10">
      <input type="text" name="nomPP" class="form-control" id="nom" >
    </div>

 <label for="roleid" class="col-md-2 col-form-label text-md-right">Choisir un role</label>
  <div class="col-md-10">
      <select class="custom-select" name="rolePP">
          <option value="">Selectionnez un role existant</option>
          <option value="Maitre A">Maitre A</option>
          <option value="Maitre B">Maitre B</option>
          <option value="Maitre C">Maitre C</option>
      </select>
  </div>
  <label for="nameLawyer" class="col-sm-2 col-form-label">Nom du second participant</label>
  <div class="col-sm-10">
      <input type="text" name="nomSP" class="form-control" id="nom" >
    </div>
    <label for="roleid" class="col-md-2 col-form-label text-md-right">Choisir un role</label>
  <div class="col-md-10">
      <select class="custom-select" name="roleSP">
          <option value="">Selectionnez un role existant</option>
          <option value="Maitre A">Maitre A</option>
          <option value="Maitre B">Maitre B</option>
          <option value="Maitre C">Maitre C</option>
      </select>
  </div>

  <label for="nameLawyer" class="col-sm-2 col-form-label">Nom du troisième participant</label>
  <div class="col-sm-10">
      <input type="text" name="nomTP" class="form-control" id="nom" >
    </div>
    <label for="roleid" class="col-md-2 col-form-label text-md-right">Choisir un role</label>
  <div class="col-md-10">
      <select class="custom-select" name="roleTP">
          <option value="">Selectionnez un role existant</option>
          <option value="Maitre A">Maitre A</option>
          <option value="Maitre B">Maitre B</option>
          <option value="Maitre C">Maitre C</option>
      </select>
  </div>

  
  <div class="form-group row" style="text-align: center;">
  

<input name="projet_id" hidden="hidden" value="{{ $data4 }}">

<div class="form-group row" style="text-align: center;">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-success">Créer</button>
    </div>
  </div>
                        </div>
  

</div>

  </div>
  </div>

  </div>
  </div> 

  @endif






 

  
  
  </div>
</div>
  </div>
</div>
</form>

@endsection

