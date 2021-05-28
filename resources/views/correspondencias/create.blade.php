@extends('layouts.main')
@section('title','crear/Corresp')
@section('contenido')

<p class="h1">NUEVA CORRESPONDENCIA</p>



<br>

<br>
    <br>
<form action="{{route('correspondencias.store')}}" method="POST">
@csrf


<div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text">
       CLAVE: </label>
            <input type="text" class="form-control" aria-label="Username" onkeyup="javascript:this.value=this.value.toUpperCase();" aria-describedby="basic-addon1" name ='clave' id="clave" value="{{old('clave')}}">

     </div>
    <div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text">
        TIPO DETRAMITE: </label>
            <input type="text" class="form-control" aria-label="Username" onkeyup="javascript:this.value=this.value.toUpperCase();" aria-describedby="basic-addon1" name ='tipo_tramite' id="tipo_tramite" value="{{old('tipo_tramite')}}">

     </div>
    <div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text">
        NUMERO DE OFICIO:</label>
            <input type="text"  class="form-control" aria-label="Username" id="numero_oficio" onkeyup="javascript:this.value=this.value.toUpperCase();" aria-describedby="basic-addon1" name ='numero_oficio' value="{{old('numero_oficio')}}">

    </div>
    <div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text" >
    FECHA DEL TRAMITE:
            <input type="date" name ='fecha_tramite' id="fecha_tramite" value="{{old('fecha_tramite')}}">
    </label>
    </div>
    <div class="input-group input-group mb-3">
    <label  for="exampleFormControlInput1" class="input-group-text">
   FECHA DE RECIBIDO:
             <input type="datetime" class="form-control" name="fecha_recibido" id="fecha_recibido"  value="<?php echo date("Y-m-d");?>" value="{{old('fecha_recibido')}}">
    </label>
    </div>
    <div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text">
    DESCRIPCION DEL TRAMITE    </label>
           <textarea name="descripcion_tramite" onkeyup="javascript:this.value=this.value.toUpperCase();"class="form-control"  id="descripcion_tramite" rows="5" value="{{old('descripcion_tramite')}}"></textarea>

    </div>
    <div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text">
    NOMBRE DEL SUSCRITO:</label>
            <input type="text" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" id="nombre_suscrito" name ='nombre_suscrito' value="{{old('nombre_suscrito')}}">

    </div>
    <div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text">
    CARGO DEL SUSCRITO:</label>
            <input type="text" class="form-control" name ='cargo'onkeyup="javascript:this.value=this.value.toUpperCase();" id="cargo" value="{{old('cargo')}}">

    </div>
    <div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text">
    TELEFONO:
            <input type="text" class="form-control" name ='telefono' id="telefono" value="{{old('telefono')}}">
    </label>
    </div>
    <div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text">
    DIRIGIDO A: </label>
            <input type="text" class="form-control" name ='dirigido'id="dirigido" onkeyup="javascript:this.value=this.value.toUpperCase();" value="Luis Arturo Diaz Covarrubias" value="{{old('dirigido')}}">

    </div>

    <div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text">
    OBSERVACIONES:
    </label>
           <textarea name="observaciones" class="form-control" id="observaciones" onkeyup="javascript:this.value=this.value.toUpperCase();" rows="5" value="{{old('observaciones')}}"></textarea>

    </div>
    <button type="submit"  class="btn btn-primary position-relative">enviar</button>
</form>


@endsection

