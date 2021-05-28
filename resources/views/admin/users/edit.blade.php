@extends('layouts.main')
@section('title','editar')
@section('contenido')

<h1>panteones</h1>


<br>
<form action="#" method="POST">
@csrf
@method('put')
    <label >
        NOMBRE:
            <input type="text" name ='name' value="{{old('name',$user->name)}}">
    </label>
    <label >
        Area:
            <input type="text" name ='name' value="{{old('name',$user->name)}}">
    </label>

    <button type="submit">actualizar</button>
</form>


@endsection
