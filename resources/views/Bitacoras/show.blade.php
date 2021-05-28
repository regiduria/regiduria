@extends('layouts.main')
@section('title','Bitacoras')
@section('contenido')
<center><p class="h1" >VER {{$bitacora->n_oficio}}</p></center>

<div>  <form action="{{route('bitacoras.edit',$bitacora)}}" method="">
    @csrf
    <button type="submit" class="btn btn-outline-primary" class="btn btn-primary btn-sm">EDITAR</button>
  </form>
</div>


<br>
<div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text"> ID: </label>
            <input type="text" name ='clave' class="form-control" readonly="readonly" aria-label="Username" onkeyup="javascript:this.value=this.value.toUpperCase();" aria-describedby="basic-addon1"  value="{{$bitacora->id}}">
</div>
    <div class="input-group input-group mb-3">
        <label for="exampleFormControlInput1" class="input-group-text"> FECHA: </label>
                <input type="text" name ='fecha' class="form-control" readonly="readonly" aria-label="Username" onkeyup="javascript:this.value=this.value.toUpperCase();" aria-describedby="basic-addon1"  value="{{$bitacora->fecha}}">
    </div>
    <div class="input-group input-group mb-3">
        <label for="exampleFormControlInput1" class="input-group-text"> NOMBRE DEL ENCARGO DEL TRAMITE: </label>
                <input type="text" name ='nombre' class="form-control" readonly="readonly" aria-label="Username" onkeyup="javascript:this.value=this.value.toUpperCase();" aria-describedby="basic-addon1"  value="{{$bitacora->nombre}}">
    </div>
    <div class="input-group input-group mb-3">
        <label for="exampleFormControlInput1" class="input-group-text">NUMERO DE OFICIO: </label>
                <input type="text" name ='n_oficio' class="form-control" readonly="readonly" aria-label="Username" onkeyup="javascript:this.value=this.value.toUpperCase();" aria-describedby="basic-addon1"  value="{{$bitacora->n_oficio}}">
    </div>


<div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text"> DIRIGIDO A:</label>
            <input type="text" name ='dirigido' class="form-control" readonly="readonly" aria-label="Username" onkeyup="javascript:this.value=this.value.toUpperCase();" aria-describedby="basic-addon1"  value="{{$bitacora->dirigido}}">
</div>
<div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text"> AREA CORRESPONDIENTE: </label>
            <input type="text" name ='area' class="form-control" readonly="readonly" aria-label="Username" onkeyup="javascript:this.value=this.value.toUpperCase();" aria-describedby="basic-addon1"  value="{{$bitacora->area}}">
</div>
@if ($bitacora->firma == 0)
<div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text"> FIRMA: </label>
            <input type="text" name ='firma' class="form-control" readonly="readonly" aria-label="Username" onkeyup="javascript:this.value=this.value.toUpperCase();" aria-describedby="basic-addon1"  value="NO">
</div>
@else
<div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text"> FIRMA: </label>
            <input type="text" name ='firma' class="form-control" readonly="readonly" aria-label="Username" onkeyup="javascript:this.value=this.value.toUpperCase();" aria-describedby="basic-addon1"  value="SI">
</div>
@endif

<div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text"> DIRECCION: </label>
            <input type="text" name ='direccion' class="form-control" readonly="readonly" aria-label="Username" onkeyup="javascript:this.value=this.value.toUpperCase();" aria-describedby="basic-addon1"  value="{{$bitacora->direccion}}">
</div>

<div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text"> OBSERVACIONES</label>
    <textarea name="descripcion" readonly="readonly" onkeyup="javascript:this.value=this.value.toUpperCase();"class="form-control" rows="5" >{{$bitacora->observaciones}} </textarea>
</div>


@endsection
