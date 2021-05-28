@extends('layouts.main')
@section('title','crear')
@section('contenido')

<p class="h1">CREAR NUEVO USUARIO</p>

<br>
<form action="{{route('administradores.store')}}" method="POST">
    @csrf

@if ($narea =="SERVICIOS")
<div class="input-group input-group mb-3"><label for="exampleFormControlInput1" class="input-group-text">   AREA: </label>
            <input type="text" name ='area' class="form-control" aria-label="Username" aria-describedby="basic-addon1"  value="SERVICIOS MUNICIPALES" value="{{old('area')}}">  </div>
@endif
@if ($narea=="COMERCIO")<div class="input-group input-group mb-3"> <label for="exampleFormControlInput1" class="input-group-text">  AREA: </label>
            <input type="text" name ='area' class="form-control" aria-label="Username" aria-describedby="basic-addon1"  value="COMERCIO EN VIA PUBLICA" value="{{old('area')}}">  </div>
@endif

@if ($narea == "MERCADOS" ||$narea == "PANTEONES" ||$narea == "BIENES" )
<div class="input-group input-group mb-3"> <label for="exampleFormControlInput1" class="input-group-text">  AREA: </label>
<input type="text" name ='area' class="form-control" aria-label="Username" aria-describedby="basic-addon1"  value="{{$narea}}" value="{{old('area')}}">  </div>
@endif
@if ($narea=="index")
<fieldset>
    <legend>AREA</legend>
    <label>
        <input type="radio" name="area" value="PANTEONES"> PANTEONES
    </label>
    <label>
        <input type="radio" name="area" value="BIENES"> BIENES
    </label>
    <label>
        <input type="radio" name="area" value="SERVICIOS MUNICIPALES"> SERVICIOS MUNICIPALES
    </label>
    <label>
        <input type="radio" name="area" value="MERCADOS"> MERCADOS
    </label>
    <label>
        <input type="radio" name="area" value="COMERCIO EN VIA PUBLICA"> COMERCIO EN VIA PUBLICA
    </label>

</fieldset>



@endif

    <div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text">
        NOMBRE: </label>
            <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name ='nombre' value="{{old('nombre')}}">

    @error('nombre')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror
    </div>


    <div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text">
        CARGO:</label>
            <input type="text"  class="form-control"aria-label="Username" aria-describedby="basic-addon1" name ='cargo' value="{{old('cargo')}}">
            @error('nombre')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror
    </div>


    <div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text" >
    Lugar donde desempeña:</label>
            <input type="text" class="form-control"aria-label="Username" aria-describedby="basic-addon1" name ='lugar' value="{{old('lugar')}}">

    @error('nombre')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror
    </div>


    <div class="input-group input-group mb-3">
    <label  for="exampleFormControlInput1" class="input-group-text">
    TELEFONO:    </label>
             <input type="text" class="form-control" name="telefono"   value="{{old('telefono')}}">

    @error('nombre')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror
    </div>

    <div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text">
        email:
            <input type="text" class="form-control" name ='email' value="{{old('email')}}">
    </label>
    </div>

    <button type="submit"  class="btn btn-primary position-relative">CREAR</button>

</form>


@endsection
