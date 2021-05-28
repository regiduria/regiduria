@extends('layouts.main')
@section('title','Panteones')
@section('conten')
<h1>Bienvenido</h1>
@endsection

@section('contenido')

<link rel="stylesheet" href="dist/css/bootstrap">

<div >

    <p class="h1">ADMINISTRADORES DE PANTEONES</p>

    <form action="{{route('administradores.create')}}" method="">
        <button type="submit" name="nuevo" value="PANTEONES" class="btn btn-outline-success btn-lg" >nuevo</button>

    </form>

</div>
<ul>

<table class="table table-responsive table-striped table-hover">
  <tr>
    <td>NOMBRE</td>
    <td>CARGO</td>
    <td>ubicacion</td>
    <td>TELEFONO</td>
    <td>EMAIL</td>
        <td></td>
        <td></td>
    </tr>



@foreach($administradores as $administradore )
@if (($administradore->area)=='PANTEONES')



    <li>


      <tr>
        <td> {{$administradore->nombre}}</td>
        <td> {{$administradore->cargo}}</td>
        <td> {{$administradore->lugar}}</td>
        <td> {{$administradore->telefono}}</td>
        <td> {{$administradore->email}}</td>

        <td><form action="{{route('administradores.edit',$administradore)}}" method="">
            @csrf
            <button type="submit" class="btn btn-outline-primary" class="btn btn-primary btn-sm">EDITAR</button>
          </form>
          </td>

        <td><form action="{{route('administradores.destroy', $administradore)}}" method="POST">
          @csrf
            @method('delete')
            <button type="submit" class=" position-relative btn btn-outline-danger btn-sm">ELIMINAR
                <span class="position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-danger p-2"><span class="visually-hidden">°</span></span>
            </button>
        </form>
        </td>

    </tr>


    </li>

    @else

    @endif


@endforeach
</table>
</ul>

{{$administradores->links()}}


@endsection
