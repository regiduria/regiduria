@extends('layouts.main')
@section('title','Panteones'. $panteon)
@section('contenido')
<a href="{{route('panteones.index')}}">volver</a>
<br>
<a href="{{route('panteones.edit',$panteon)}}">editar curso</a>
<h1>id {{$panteon}}</h1>


@endsection
