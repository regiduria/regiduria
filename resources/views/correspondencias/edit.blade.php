@extends('layouts.main')
@section('title','editar/correspondencia')
@section('contenido')




<br>
<form action="{{route('tramites.store')}}" method="POST">
@csrf
<div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text">
            CLAVE: </label>
                <input type="text" name ='clave' class="form-control" aria-label="Username" onkeyup="javascript:this.value=this.value.toUpperCase();" aria-describedby="basic-addon1" value="{{old('numero_oficio',$correspondencia->clave)}}">
    </div>

    <fieldset>
        <legend>AREA</legend>
        <label>
            <input type="radio" name="area" value="PANTEONES"> PANTEONES
        </label>
        <label>
            <input type="radio" name="area" value="BIENES" > BIENES
        </label>
        <label>
            <input type="radio" name="area" value="SERVICIOS MUNICIPALES" > SERVICIOS MUNICIPALES
        </label>
        <label>
            <input type="radio" name="area" value="MERCADOS" > MERCADOS
        </label>
        <label>
            <input type="radio" name="area" value="COMERCIO EN VIA PUBLICA" > COMERCIO EN VIA PUBLICA
        </label>
        @error('area')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror
    </fieldset>


        <div class="input-group input-group mb-3">
        <label for="exampleFormControlInput1" class="input-group-text">
            TIPO DE TRAMITE: </label>
                <input type="text" class="form-control" aria-label="Username" onkeyup="javascript:this.value=this.value.toUpperCase();" aria-describedby="basic-addon1" name ='tipo_tramite' value="{{old('tipo_tramite',$correspondencia->tipo_tramite )}}">

        @error('tipo_tramite')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror
        </div>
        <div class="input-group input-group mb-3">
        <label for="exampleFormControlInput1" class="input-group-text">
           NUMERO DE OFICIO:</label>
                <input type="text"  class="form-control" aria-label="Username"  onkeyup="javascript:this.value=this.value.toUpperCase();" aria-describedby="basic-addon1" name ='numero_oficio' value="{{old('numero_oficio',$correspondencia->numero_oficio)}}">

        </div>
        <div class="input-group input-group mb-3">
        <label for="exampleFormControlInput1" class="input-group-text" >
       FECHA DE TRAMITE:
                <input type="date" class="form-control" name ='fecha_tramite' value="{{old('fecha_tramite',$correspondencia->fecha_tramite)}}">
        </label>
        </div>
        <div class="input-group input-group mb-3">
        <label  for="exampleFormControlInput1" class="input-group-text">
        FECHA DE RECIBIDO:
                 <input type="datetime" class="form-control" name="fecha_recibido"  value="{{old('fecha_recibido',$correspondencia->fecha_recibido)}}">
        </label>
        </div>
        <div class="input-group input-group mb-3">
        <label for="exampleFormControlInput1" class="input-group-text">
        DESCRIPCION DEL TRAMITE:
        </label>
               <textarea name="descripcion_tramite" onkeyup="javascript:this.value=this.value.toUpperCase();"class="form-control" rows="5">{{old('descripcion_tramite',$correspondencia->descripcion_tramite)}}</textarea>

        </div>
        <div class="input-group input-group mb-3">
        <label for="exampleFormControlInput1" class="input-group-text">
        NOMBRE DEL SUSCRITO:</label>
                <input type="text" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" name ='nombre_suscrito' value="{{old('nombre_suscrito',$correspondencia->nombre_suscrito)}}">

        @error('nombre_suscrito')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror
        </div>
        <div class="input-group input-group mb-3">
        <label for="exampleFormControlInput1" class="input-group-text">
         CARGO DEL SUSCRITO:</label>
                <input type="text" class="form-control" name ='cargo'onkeyup="javascript:this.value=this.value.toUpperCase();"
                 value="{{old('cargo',$correspondencia->cargo)}}">

        </div>
        <div class="input-group input-group mb-3">
        <label for="exampleFormControlInput1" class="input-group-text">
            TELEFONO:
                <input type="text" class="form-control" name ='telefono' value="{{old('telefono',$correspondencia->telefono)}}">
        </label>
        </div>
        <div class="input-group input-group mb-3">
        <label for="exampleFormControlInput1" class="input-group-text">
            DIRIGIDO A:  </label>
                <input type="text" class="form-control" name ='dirigido' onkeyup="javascript:this.value=this.value.toUpperCase();"
                value="Luis Arturo Diaz Covarrubias" value="{{old('dirigido',$correspondencia->dirigido)}}">

        </div>
        <div class="input-group input-group mb-3">
        <label for="exampleFormControlInput1" class="input-group-text">
            CARGO DEL DIRIGIDO: </label>
                <input type="text" class="form-control" name ='cargo_dirigido' onkeyup="javascript:this.value=this.value.toUpperCase();" value="Regidor de Panteones,Bienes,Servicios Municipales y Mercados y Comercio en Via publica"
                value="{{old('cargo_dirigido')}}">

        </div>
        <div class="input-group input-group mb-3">
        <label for="exampleFormControlInput1" class="input-group-text">
           ESTADO DEL TRAMITE:
                <input type="text" class="form-control" name ='estado' onkeyup="javascript:this.value=this.value.toUpperCase();"
                 value="{{old('estado')}}">
        </label>
        @error('estado')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror
        </div>

        <div class="input-group input-group mb-3">
            <label for="exampleFormControlInput1" class="input-group-text">
                ID LIC QUE LO DIRIGE:
                    <input type="text" class="form-control" name ='lic_dirige' onkeyup="javascript:this.value=this.value.toUpperCase();"
                     value="{{old('lic_dirige')}}">
            </label>

            </div>


        <div class="input-group input-group mb-3">
        <label for="exampleFormControlInput1" class="input-group-text">
            UBICACION: </label>
                <input type="text" class="form-control" name ='ubicacion' onkeyup="javascript:this.value=this.value.toUpperCase();" value="{{old('ubicacion')}}">

        @error('ubicacion')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror
        </div>
        <div class="input-group input-group mb-3">
        <label for="exampleFormControlInput1" class="input-group-text">
            NOMBRE DE LA CARPETA:</label>
                <input type="text" class="form-control" name ='nombre_carpeta' onkeyup="javascript:this.value=this.value.toUpperCase();" value="{{old('nombre_carpeta')}}">

        @error('nombre_carpeta')
        <br>
        <small color='red'>*{{$message}}</small>
        <br>
        @enderror
        </div>
        <div class="input-group input-group mb-3">
        <label for="exampleFormControlInput1" class="input-group-text">
            OBSERVACIONES:
        </label>
               <textarea name="observaciones" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" rows="5" >{{old('observaciones',$correspondencia->observaciones)}}</textarea>

        </div>






        <button type="submit" name="enviar2" value="eliminar" class="btn btn-primary position-relative">ENVIAR</button>
    </form>


@endsection
