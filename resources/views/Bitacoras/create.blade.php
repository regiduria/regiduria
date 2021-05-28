@extends('layouts.main')
@section('title','crear/usuaios')
@section('contenido')

<p class="h1">BITACORAS</p>

<br>
<form action="{{route('bitacoras.store')}}" method="POST"  enctype="multipart/form-data">
    @csrf
    <div class="input-group input-group mb-3">
        <label for="exampleFormControlInput1" class="input-group-text">
            FECHA:
                <input type="date" name ='fecha'onkeyup="javascript:this.value=this.value.toUpperCase();" id="name" class="form-control" aria-label="Username" aria-describedby="basic-addon1"   value="<?php echo date("Y-m-d");?>" value="{{old('fecha')}}">
            </label>    </div>
     <div class="input-group input-group mb-3">
        <label for="exampleFormControlInput1" class="input-group-text">
            NUMERO DE OFICIO: </label>
                <input type="text" name ='n_oficio'onkeyup="javascript:this.value=this.value.toUpperCase();" id="name" class="form-control" aria-label="Username" aria-describedby="basic-addon1" aria-describedby="basic-addon1" value="{{old('n_oficio')}}">
                          </div>
    <div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text">
        NOMBRE: </label>
            <input type="text" name ='nombre'onkeyup="javascript:this.value=this.value.toUpperCase();" id="name" class="form-control" aria-label="Username" aria-describedby="basic-addon1"  value="{{old('nombre')}}">

        </div>

    <div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text">
        DIRIGIDO A : </label>
            <input type="text" class="form-control" id="dirigido" onkeyup="javascript:this.value=this.value.toUpperCase();" aria-label="Username" aria-describedby="basic-addon1" name ='dirigido' value="{{old('dirigido')}}">


    </div>


    <div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text">
        AREA CORRESPONDIENTE:</label>
            <input type="text" class="form-control"aria-label="Username" aria-describedby="basic-addon1" onkeyup="javascript:this.value=this.value.toUpperCase();" name ='area' value="{{old('area')}}">

    </div>


    <fieldset>
        <legend>FIRMA</legend>
        <label>
            <input type="radio" name="firma" value=1> SI
        </label>
        <label>
            <input type="radio" name="firma" value=0 checked> NO
        </label>

    </fieldset>



    <div class="input-group input-group mb-3">
    <label  for="exampleFormControlInput1" class="input-group-text">
    DIRECCION:</label>
             <input type="text" class="form-control" name="direccion"  onkeyup="javascript:this.value=this.value.toUpperCase();"  value="{{old('direccion')}}">


    </div>
    <div class="input-group input-group mb-3">
        <label  for="exampleFormControlInput1" class="input-group-text">
        OBSERVACIONES:</label>
                 <input type="text" class="form-control" name="observaciones" onkeyup="javascript:this.value=this.value.toUpperCase();"  value="{{old('observaciones')}}">


        </div>


    <button type="submit"   class="btn btn-primary position-relative">enviar</button>
</form>


@endsection
