@extends('layouts.main')
@section('title','Panteones')
@section('conten')
<h1>Bienvenido</h1>
@endsection
@section('content1')
   <span>REGLAMENTO</span>
@endsection
@section('content2')
   <span>UBICACIONES</span>
@endsection

@section('contenido')

<link rel="stylesheet" href="dist/css/bootstrap">




<ul>

<table class="table table-responsive table-striped table-hover">
  <tr>
      <td>AREA</td>
    <td>TIPO DE TRAMITE</td>
    <td>NUMERO DE OFICIO</td>
    <td>FECHA DEL TRAMITE</td>
    <td>FECHA DE RECIBIDO</td>
    <td>estado del tramite</td>
    <td></td>
    <td></td>
    </tr>



@foreach($tramites as $tramite )
@if (($tramite->estado)=='URGENTE')



    <li>


      <tr>
        <td> {{$tramite->area}}</td>
       <td> {{$tramite->tipo_tramite}}</td>
       <td> {{$tramite->numero_oficio}}</td>
       <td> {{$tramite->descripcion_tramite}}</td>
       <td> {{$tramite->fecha_recibido}}</td>
      <td> {{$tramite->estado}}</td>

       <td><form action="{{route('tramites.show', $tramite->id)}}" method="">
        <button type="submit" class="btn btn-outline-success" class="btn btn-primary btn-sm">VER</button>
    </form>
    </td>





    </tr>


    </li>

    @else

    @endif


@endforeach
</table>
</ul>

{{$tramites->links()}}


@endsection
