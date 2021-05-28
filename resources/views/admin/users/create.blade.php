@extends('layouts.main')
@section('title','crear')
@section('contenido')

<p class="h1">Crear Nuevo Archivo</p>

<br>
<form action="{{route('admin.users.store')}}" method="POST">
@csrf
    <div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text">
        NOMBRE: </label>
            <input type="text" class="form-control" aria-label="Username" onkeyup="javascript:this.value=this.value.toUpperCase();" aria-describedby="basic-addon1" name ='name' value="{{old('name')}}">

   @error('name') <br> <small>*{{$message}}</small>  <br>  @enderror
    </div>
    <div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text">
       Email:</label>
            <input type="text"  class="form-control" aria-label="Username"  onkeyup="javascript:this.value=this.value.toUpperCase();" aria-describedby="basic-addon1" name ='email' value="{{old('email')}}">

    </div>


    <input type="hidden" name= "email_verified_at" class="form-control bg-light border-0 small"
    value="<?php echo date("Y-m-d H:i:s");?>">
    <?php
    $caracteres = "AB1234567890";
        $desordenada = str_shuffle($caracteres);
        $CH = substr($desordenada, 1, 4);
    ?>
    <input type="hidden" name= "remember_Token" class="form-control bg-light border-0 small"
    value="<?php echo $CH ?>">


    <div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text">
        CONTRASEÑA:</label>
            <input type="text" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" name ='password' value="{{old('password')}}">

    @error('nombre_suscrito')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror
    </div>
    <div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text">
        TIPO DE USUARIO:</label>
            <input type="text" class="form-control" name ='tipo' onkeyup="javascript:this.value=this.value.toUpperCase();" value="{{old('tipo')}}">

    </div>
    <div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text">
        telefono:
            <input type="text" class="form-control" name ='telefono' value="{{old('telefono')}}">
    </label>
    </div>
    <div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text">
        AVATAR:  </label>
            <input type="text" class="form-control" name ='avatar' onkeyup="javascript:this.value=this.value.toUpperCase();"  value="{{old('avatar')}}">

    </div>

    <button type="submit"  class="btn btn-primary position-relative">enviar</button>
</form>


@endsection
