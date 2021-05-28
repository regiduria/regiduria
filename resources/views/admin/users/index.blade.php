@extends('layouts.main')
@section('title','Admin')
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

<div class="d-grid gap-2">

    <center><p class="h1" >USUARIOS </p></center>

    <form action="{{route('auth.create')}}" method="">
        <button type="submit" class="btn btn-outline-success btn-lg" >nuevo</button>
    </form>

</div>
<ul>

<table class="table table-responsive table-striped table-hover"  overflow:scroll>
  <tr>
    <td>CARGO</td>
    <td>NOMBRE</td>
    <td>EMAIL</td>
    <td>TELEFONO</td>

    </tr>



@foreach($users as $user )




    <li>


      <tr>
        <td> {{$user->tipo}}</td>
        <td> {{$user->name}}</td>
        <td> {{$user->email}}</td>
        <td> {{$user->telefono}}</td>
        <td><form action="{{route('admin.users.show', $user->id)}}" method="">
            <button type="submit" class="btn btn-outline-success" class="btn btn-primary btn-sm">VER</button>
        </form>

           </td>
           <td><form action="{{route('admin.users.edit',$user)}}" method="">
            @csrf
            <button type="submit" class="btn btn-outline-primary" class="btn btn-primary btn-sm">EDITAR</button>
          </form>
          </td>




    </tr>


    </li>




@endforeach
</table>
</ul>

{{$users->links()}}


@endsection
