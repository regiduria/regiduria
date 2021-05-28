@extends('layouts.main')
@section('title','Panteones')
@section('contenido')

<link rel="stylesheet" href="dist/css/bootstrap">

<div class="d-grid gap-2">

    <center><p class="h1" >PANTEONES</p></center>

    <form action="{{route('tramites.create')}}" method="">
        <button type="submit" class="btn btn-outline-success btn-lg" >nuevo</button>
    </form>

</div>
<br>

<ul>

<table class="table table-responsive table-striped table-hover">
  <tr>
    <td>tipo de tramite</td>
    <td>numero de oficio</td>
    <td>descripcion</td>
    <td>fecha del tramite</td>
    <td>fecha de recibido</td>
    <td>descipcion</td>
    <td>nombre del suscrito</td>
    <td>telefono</td>
    <td>estado del tramite</td>
    <td></td>
    <td></td>
    </tr>



@foreach($tramites as $tramite )




    <li>


      <tr>

       <td> {{$tramite->tipo_tramite}}</td>
       <td> {{$tramite->numero_oficio}}</td>
       <td> {{$tramite->descripcion_tramite}}</td>
       <td> {{$tramite->fecha_tramite}}</td>
       <td> {{$tramite->fecha_recibido}}</td>
       <td> {{$tramite->descripcion_tramite}}</td>
       <td> {{$tramite->nombre_suscrito}}</td>
       <td> {{$tramite->telefono}}</td>
       <td> {{$tramite->estado}}</td>

       <td><form action="{{route('tramites.show', $tramite->id)}}" method="">
        <button type="submit" class="btn btn-outline-success" class="btn btn-primary btn-sm">VER</button>
    </form>
    </td>

        <td><form action="{{route('tramites.edit',$tramite)}}" method="">
            @csrf
            <button type="submit" class="btn btn-outline-primary" class="btn btn-primary btn-sm">EDITAR</button>
          </form>
          </td>

        <td><form action="{{route('tramites.destroy', $tramite)}}" method="POST">
          @csrf
            @method('delete')
            <button type="submit" class=" position-relative btn btn-outline-danger btn-sm">ELIMINAR<span class="position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-danger p-2"><span class="visually-hidden">°</span></span>
            </button>
        </form>
        </td>
    </tr>


    </li>




@endforeach
</table>
</ul>

{{$tramites->links()}}


@endsection
