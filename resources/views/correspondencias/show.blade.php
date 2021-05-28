@extends('layouts.main')
@section('title','Panteones')
@section('contenido')
<center><p class="h1" >VER {{$tramite->area}}</p></center>

<div>  <form action="{{route('tramites.edit',$tramite)}}" method="">
    @csrf
    <button type="submit" class="btn btn-outline-primary" class="btn btn-primary btn-sm">EDITAR</button>
  </form>
</div>

<div>  <form action="{{route('admin.volver')}}" method="">

    <button type="submit" name="volver" value="{{$tramite->area}}" class="btn btn-outline-primary" class="btn btn-primary btn-sm">VOLVER</button>

  </form>
</div>
<br>
    <div class="input-group input-group mb-3">
        <label for="exampleFormControlInput1" class="input-group-text"> AREA: </label>
                <input type="text" name ='area' class="form-control" readonly="readonly" aria-label="Username" onkeyup="javascript:this.value=this.value.toUpperCase();" aria-describedby="basic-addon1"  value="{{$tramite->area}}">
    </div>

    <div class="input-group input-group mb-3">
        <label for="exampleFormControlInput1" class="input-group-text"> TIPO DE TRAMITE: </label>
                <input type="text" name ='area' class="form-control" readonly="readonly" aria-label="Username" onkeyup="javascript:this.value=this.value.toUpperCase();" aria-describedby="basic-addon1"  value="{{$tramite->tipo_tramite}}">
    </div>
    <div class="input-group input-group mb-3">
        <label for="exampleFormControlInput1" class="input-group-text"> NUMERO DE OFICIO: </label>
                <input type="text" name ='area' class="form-control" readonly="readonly" aria-label="Username" onkeyup="javascript:this.value=this.value.toUpperCase();" aria-describedby="basic-addon1"  value="{{$tramite->numero_oficio}}">
    </div>
    <div class="input-group input-group mb-3">
        <label for="exampleFormControlInput1" class="input-group-text"> FECHA DEL TRAMITE: </label>
                <input type="text" name ='area' class="form-control" readonly="readonly" aria-label="Username" onkeyup="javascript:this.value=this.value.toUpperCase();" aria-describedby="basic-addon1"  value="{{$tramite->fecha_tramite}}">
    </div>
    <div class="input-group input-group mb-3">
        <label for="exampleFormControlInput1" class="input-group-text"> FECHA DE RECIBIDO: </label>
                <input type="text" name ='area' class="form-control" readonly="readonly" aria-label="Username" onkeyup="javascript:this.value=this.value.toUpperCase();" aria-describedby="basic-addon1"  value="{{$tramite->fecha_recibido}}">
    </div>


    <div class="input-group input-group mb-3">
        <label for="exampleFormControlInput1" class="input-group-text">
            DESCRIPCION DEL TRAMITE:
        </label>
               <textarea name="descripcion_tramite" readonly="readonly" onkeyup="javascript:this.value=this.value.toUpperCase();"class="form-control" rows="5" >{{$tramite->descripcion_tramite}} </textarea>

        </div>
     <div class="input-group input-group mb-3">
            <label for="exampleFormControlInput1" class="input-group-text"> NOMBRE DEL SUSCRITO:</label>
                    <input type="text" name ='area' class="form-control" readonly="readonly" aria-label="Username" onkeyup="javascript:this.value=this.value.toUpperCase();" aria-describedby="basic-addon1"  value="{{$tramite->nombre_suscrito}}">
     </div>

     <div class="input-group input-group mb-3">
        <label for="exampleFormControlInput1" class="input-group-text"> CARGO DEL SUSCRITO:</label>
                <input type="text" name ='area' class="form-control" readonly="readonly" aria-label="Username" onkeyup="javascript:this.value=this.value.toUpperCase();" aria-describedby="basic-addon1"  value="{{$tramite->cargo}}">
 </div>
 <div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text"> TELEFONO:</label>
            <input type="text" name ='area' class="form-control" readonly="readonly" aria-label="Username" onkeyup="javascript:this.value=this.value.toUpperCase();" aria-describedby="basic-addon1"  value="{{$tramite->telefono}}">
</div>
<div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text"> DIRIGIDO A:</label>
            <input type="text" name ='area' class="form-control" readonly="readonly" aria-label="Username" onkeyup="javascript:this.value=this.value.toUpperCase();" aria-describedby="basic-addon1"  value="{{$tramite->dirigido}}">
</div>
<div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text"> CARGO DEL DIRIGIDO: </label>
            <input type="text" name ='area' class="form-control" readonly="readonly" aria-label="Username" onkeyup="javascript:this.value=this.value.toUpperCase();" aria-describedby="basic-addon1"  value="{{$tramite->cargo_dirigido}}">
</div>

<div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text"> ESTADO DEL TRAMITE: </label>
            <input type="text" name ='area' class="form-control" readonly="readonly" aria-label="Username" onkeyup="javascript:this.value=this.value.toUpperCase();" aria-describedby="basic-addon1"  value="{{$tramite->estado}}">
</div>
<div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text"> UBICACION</label>
            <input type="text" name ='area' class="form-control" readonly="readonly" aria-label="Username" onkeyup="javascript:this.value=this.value.toUpperCase();" aria-describedby="basic-addon1"  value="{{$tramite->ubicacion}}">
</div>
<div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text"> NOMBRE DE LA CARPETA</label>
            <input type="text" name ='area' class="form-control" readonly="readonly" aria-label="Username" onkeyup="javascript:this.value=this.value.toUpperCase();" aria-describedby="basic-addon1"  value="{{$tramite->nombre_carpeta}}">
</div>
<div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text"> OBSERVACIONES</label>
    <textarea name="descripcion_tramite" readonly="readonly" onkeyup="javascript:this.value=this.value.toUpperCase();"class="form-control" rows="5" >{{$tramite->observaciones}} </textarea>
</div>


@endsection
