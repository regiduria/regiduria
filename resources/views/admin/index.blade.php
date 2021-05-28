@extends('layouts.main')
@section('title','Admin')


@section('contenido')

<link rel="stylesheet" href="dist/css/bootstrap">

<div class="d-grid gap-2">

    <center><p class="h1" >INICIO</p></center>


</div>
<div class="card-body">

    <h4>Bienvenido . {{ auth()->user()->name }} </h4>
 </div>

<ul>

<table class="table table-responsive table-striped table-hover">
  <tr>
    <td>AREA</td>
    <td>NUMERO DE OFICIO</td>
    <td>DESCRIPCION DEL TRAMITE</td>
    <td>NOMBRE DEL SUSCRITO</td>

    <td>ESTADO</td>
    <td></td>
    </tr>



@foreach($tramites as $tramite )
    <li>


      <tr>

       <td> {{$tramite->area}}</td>
       <td> {{$tramite->numero_oficio}}</td>
       <td> {{$tramite->nombre_suscrito}}</td>
       <td> {{$tramite->telefono}}</td>
       <td> {{$tramite->estado}}</td>

       <td><form action="{{route('tramites.show', $tramite->id)}}" method="">
        <button type="submit" class="btn btn-outline-success" class="btn btn-primary btn-sm">VER</button>
    </form>
    </td>




    </li>
@endforeach
</table>
</ul>

{{$tramites->links()}}


@endsection
