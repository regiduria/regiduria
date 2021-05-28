@extends('layouts.main')
@section('title','crear/usuaios')
@section('contenido')

<p class="h1">REGISTRO DE USUARIOS</p>

<br>
<form action="{{route('auth.store')}}" method="POST"  enctype="multipart/form-data">
    @csrf
    <fieldset>
        <legend>CARGO</legend>
        <label>
            <input type="radio" name="tipo" value="ADMINISTRADOR"> ADMINISTRADOR
        </label>
        <label>
            <input type="radio" name="tipo" value="USUARIO" checked> USUARIO
        </label>

    </fieldset>
    @error('tipo')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror

    <div class="input-group input-group mb-3">
        <label for="exampleFormControlInput1" class="input-group-text">
            CLAVE: </label>
                <input type="text" name ='clave'onkeyup="javascript:this.value=this.value.toUpperCase();" id="name" class="form-control" aria-label="Username" aria-describedby="basic-addon1"  value="{{old('clave')}}">
                @error('clave')
                <br>
                <small>*{{$message}}</small>
                <br>
                @enderror

            </div>
    <div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text">
        NOMBRE: </label>
            <input type="text" name ='name'onkeyup="javascript:this.value=this.value.toUpperCase();" id="name" class="form-control" aria-label="Username" aria-describedby="basic-addon1"  value="{{old('name')}}">
            @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror
        </div>

    <div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text">
        EMAIL: </label>
            <input type="email" class="form-control" id="email" aria-label="Username" aria-describedby="basic-addon1" name ='email' value="{{old('email')}}">

    @error('email')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror
    </div>


    <div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text">
        CONTRASEÑA:</label>
            <input type="password" id="password" class="form-control"aria-label="Username" aria-describedby="basic-addon1" name ='password' value="{{old('cargo')}}">
            @error('password')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror
    </div>






    <div class="input-group input-group mb-3">
    <label  for="exampleFormControlInput1" class="input-group-text">
    TELEFONO:
             <input type="text" class="form-control" name="telefono"   value="{{old('telefono')}}">
    </label>

    </div>

    <input class="form-control" type="hidden" id="avatar" name ='avatar' value="peril.jpg">
<!--
    <div class="input-group input-group mb-3">
        <label for="exampleFormControlInput1" class="input-group-text">
            AVATAR:
                <input type="file" class="form-control" id="avatar" name ='avatar' value="{{old('avatar')}}">
        </label>

        </div>-->


    <button type="submit"   class="btn btn-primary position-relative">enviar</button>
</form>


@endsection
