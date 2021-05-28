@extends('layouts.main')
@section('title','editar')
@section('contenido')




<br>
<form action="{{route('tramites.update', $tramite)}}" method="POST">
@csrf
@method('put')

<div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text">
            AREA: </label>
                <input type="text" name ='area' class="form-control" aria-label="Username" onkeyup="javascript:this.value=this.value.toUpperCase();" aria-describedby="basic-addon1"  value="{{old('area',$tramite->area)}}">
    </div>

        <div class="input-group input-group mb-3">
        <label for="exampleFormControlInput1" class="input-group-text">
            TIPO DE TRAMITE: </label>
                <input type="text" class="form-control" aria-label="Username" onkeyup="javascript:this.value=this.value.toUpperCase();" aria-describedby="basic-addon1" name ='tipo_tramite' value="{{old('tipo_tramite',$tramite->tipo_tramite )}}">

        @error('tipo_tramite')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror
        </div>
        <div class="input-group input-group mb-3">
        <label for="exampleFormControlInput1" class="input-group-text">
            NUMERO DE OFICIO:</label>
                <input type="text"  class="form-control" aria-label="Username"  onkeyup="javascript:this.value=this.value.toUpperCase();" aria-describedby="basic-addon1" name ='numero_oficio' value="{{old('numero_oficio',$tramite->numero_oficio)}}">

        </div>
        <div class="input-group input-group mb-3">
        <label for="exampleFormControlInput1" class="input-group-text" >
        FECHA DEL TRAMITE:
                <input type="date" class="form-control" name ='fecha_tramite' value="{{old('fecha_tramite',$tramite->fecha_tramite)}}">
        </label>
        </div>
        <div class="input-group input-group mb-3">
        <label  for="exampleFormControlInput1" class="input-group-text">
       FECHA DE RECIVIBO:
                 <input type="datetime" class="form-control" name="fecha_recibido"  value="{{old('fecha_recibido',$tramite->fecha_recibido)}}">
        </label>
        </div>
        <div class="input-group input-group mb-3">
        <label for="exampleFormControlInput1" class="input-group-text">
           DESCRIPCION DEL TRAMITE:
        </label>
               <textarea name="descripcion_tramite" onkeyup="javascript:this.value=this.value.toUpperCase();"class="form-control" rows="5">{{old('descripcion_tramite',$tramite->descripcion_tramite)}}</textarea>

        </div>
        <div class="input-group input-group mb-3">
        <label for="exampleFormControlInput1" class="input-group-text">
            NOMBRE DEL SUSCRITO:</label>
                <input type="text" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" name ='nombre_suscrito' value="{{old('nombre_suscrito',$tramite->nombre_suscrito)}}">

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
                 value="{{old('cargo',$tramite->cargo)}}">

        </div>
        <div class="input-group input-group mb-3">
        <label for="exampleFormControlInput1" class="input-group-text">
            TELEFONO:
                <input type="text" class="form-control" name ='telefono' value="{{old('telefono',$tramite->telefono)}}">
        </label>
        </div>
        <div class="input-group input-group mb-3">
        <label for="exampleFormControlInput1" class="input-group-text">
            DIRIGIDO:  </label>
                <input type="text" class="form-control" name ='dirigido' onkeyup="javascript:this.value=this.value.toUpperCase();"
                value="Luis Arturo Diaz Covarrubias" value="{{old('dirigido',$tramite->dirigido)}}">

        </div>
        <div class="input-group input-group mb-3">
        <label for="exampleFormControlInput1" class="input-group-text">
            CARGO DEL DIRIGIDO: </label>
                <input type="text" class="form-control" name ='cargo_dirigido' onkeyup="javascript:this.value=this.value.toUpperCase();" value="Regidor de Panteones,Bienes,Servicios Municipales y Mercados y Comercio en Via publica"
                value="{{old('cargo_dirigido',$tramite->cargo_dirigido)}}">

        </div>
        <div class="input-group input-group mb-3">
        <label for="exampleFormControlInput1" class="input-group-text">
            ESTADO DEL TRAMITE:
                <input type="text" class="form-control" name ='estado' onkeyup="javascript:this.value=this.value.toUpperCase();"
                 value="{{old('estado',$tramite->estado)}}">
        </label>
        @error('estado')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror
        </div>

        <div class="input-group input-group mb-3">
            <label for="exampleFormControlInput1" class="input-group-text">
                LICENCIADO QUE LLEVA EL TRAMITE:</label>
                    <input type="text" class="form-control" name ='lic_dirige' onkeyup="javascript:this.value=this.value.toUpperCase();" value="{{old('nc_carpeta',$tramite->lic_dirige)}}">
   </div>

        <div class="input-group input-group mb-3">
        <label for="exampleFormControlInput1" class="input-group-text">
            UBICACION:</label>
                <input type="text" class="form-control" name ='ubicacion' onkeyup="javascript:this.value=this.value.toUpperCase();" value="{{old('ubicacion',$tramite->ubicacion)}}">

        @error('ubicacion')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror
        </div>
        <div class="input-group input-group mb-3">
        <label for="exampleFormControlInput1" class="input-group-text">
            NOMBRE DE LA CARPETA:</label>
                <input type="text" class="form-control" name ='nombre_carpeta' onkeyup="javascript:this.value=this.value.toUpperCase();" value="{{old('nombre_carpeta',$tramite->nombre_carpeta)}}">

        @error('nombre_carpeta')
        <br>
        <small color='red'>*{{$message}}</small>
        <br>
        @enderror
        </div>
        <div class="input-group input-group mb-3">
            <label for="exampleFormControlInput1" class="input-group-text">
                NUMERO DE CONTROL DE LA CARPETA:</label>
                    <input type="text" class="form-control" name ='nc_carpeta' onkeyup="javascript:this.value=this.value.toUpperCase();" value="{{old('nc_carpeta',$tramite->nc_carpeta)}}">
   </div>



        <div class="input-group input-group mb-3">
        <label for="exampleFormControlInput1" class="input-group-text">
            Observaciones:
        </label>
               <textarea name="observaciones" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" rows="5" >{{old('observaciones',$tramite->observaciones)}}</textarea>

        </div>






        <button type="submit"  class="btn btn-primary position-relative">ENVIAR</button>
    </form>


@endsection
