@extends('layouts.main')
@section('title','editar')
@section('contenido')




<br>
<form action="{{route('auth.update', $user)}}" method="POST">
@csrf
@method('put')

<div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text">
            NOMBRE: </label>
                <input type="text" name ='name' class="form-control" aria-label="Username" onkeyup="javascript:this.value=this.value.toUpperCase();" aria-describedby="basic-addon1"  value="{{old('name',$user->name)}}">
    </div>

    <div class="input-group input-group mb-3">
        <label for="exampleFormControlInput1" class="input-group-text">
                EMAIL: </label>
                    <input type="text" name ='email' class="form-control" aria-label="Username"  aria-describedby="basic-addon1"  value="{{old('name',$user->email)}}">
        </div>
        <div class="input-group input-group mb-3">
            <label for="exampleFormControlInput1" class="input-group-text">
                    TELEFONO: </label>
                        <input type="text" name ='email' class="form-control" aria-label="Username"  aria-describedby="basic-addon1"  value="{{old('name',$user->telefono)}}">
            </div>



    <button type="submit">actualizar</button>
</form>


@endsection
