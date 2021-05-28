@extends('layouts.main')
@section('title','editar')
@section('contenido')

<h1>panteones</h1>


<br>
<form action="{{route('administradores.update', $administradore)}}" method="POST">
@csrf
@method('put')



<div class="input-group input-group mb-3">
<label for="exampleFormControlInput1" class="input-group-text" >
        Area:</label>
            <input class="form-control" aria-label="Username" onkeyup="javascript:this.value=this.value.toUpperCase();" aria-describedby="basic-addon1" type="text" name ='area' value="{{old('area',$administradore->area)}}">

</div>

    <div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text">
        NOMBRE: </label>
            <input class="form-control" aria-label="Username" onkeyup="javascript:this.value=this.value.toUpperCase();" aria-describedby="basic-addon1" type="text" name ='nombre' value="{{old('nombre',$administradore->nombre)}}">
    </label>
    </div>
    @error('name')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror

    <div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text">
        CARGO: </label>
            <input class="form-control" aria-label="Username" onkeyup="javascript:this.value=this.value.toUpperCase();" aria-describedby="basic-addon1" type="text" name ='cargo' value="{{old('cargo',$administradore->cargo)}}">

    </div>
    <div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text">
        LUGAR:</label>
            <input class="form-control" aria-label="Username" onkeyup="javascript:this.value=this.value.toUpperCase();" aria-describedby="basic-addon1" type="text" name ='lugar' value="{{old('lugar',$administradore->lugar)}}">

    </div>
    <div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text" >
TELEFONO:</label>
<input class="form-control" aria-label="Username" onkeyup="javascript:this.value=this.value.toUpperCase();" aria-describedby="basic-addon1" type="text" name ='telefono' value="{{old('telefono',$administradore->telefono)}}">


    </div>

    <div class="input-group input-group mb-3">
        <label for="exampleFormControlInput1" class="input-group-text" >
    EMAIL:</label>
    <input class="form-control" aria-label="Username" onkeyup="javascript:this.value=this.value.toUpperCase();" aria-describedby="basic-addon1" type="text" name ='telefono' value="{{old('telefono',$administradore->email)}}">


        </div>



    <button type="submit"  class="btn btn-primary position-relative">ACTUALIZAR</button>
</form>


@endsection
