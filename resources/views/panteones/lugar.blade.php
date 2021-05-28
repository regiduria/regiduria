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
@section('tablacontent2')
<div class="bg-white py-2 collapse-inner rounded">
    <h6 class="collapse-header"></h6>

    <form action="{{route('panteones.lugar')}}">

        <button  class="collapse-item" >PANTEONES</button>
    </form>
    <form action="{{route('panteones.administrador')}}">

        <button  class="collapse-item" >ADMINISTRADORES</button>
    </form>
    <i class="bi bi-backspace-reverse"> </i>


</div>


@endsection
@section('contenido')
<div>

</div>
@endsection
