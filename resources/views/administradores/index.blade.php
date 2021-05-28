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

<div class="d-grid gap-2">

    <center><p class="h1" >ADMINISTRADORES</p></center>

    <form action="{{route('administradores.create')}}" method="">
        <button type="submit" name="nuevo" value="index" class="btn btn-outline-success btn-lg" >nuevo</button>

    </form>

</div>
<br>

<ul>

<table class="table table-responsive table-striped table-hover">
  <tr>
    <td>AREA</td>
    <td>NOMBRE</td>
    <td>CARGO</td>
    <td>TELEFONO</td>

    <td></td>
    <td></td>
    </tr>



@foreach($administradore as $tramite )




    <li>


      <tr>

       <td> {{$tramite->area}}</td>
       <td> {{$tramite->nombre}}</td>
       <td> {{$tramite->cargo}}</td>
       <td> {{$tramite->telefono}}</td>

       <td><form action="{{route('administradores.show', $tramite->id)}}" method="">
        <button type="submit" class="btn btn-outline-success" class="btn btn-primary btn-sm">VER</button>
    </form>
    </td>

        <td><form action="{{route('administradores.edit',$tramite)}}" method="">
            @csrf
            <button type="submit" class="btn btn-outline-primary" class="btn btn-primary btn-sm">EDITAR</button>
          </form>
          </td>

        <td><form class="eliminar-tramite" action="{{route('administradores.destroy', $tramite)}}" method="POST">
            @csrf
            <input type="hidden" name= "value2" class="form-control bg-light border-0 small"
                            value="index"
                            aria-label="Search" aria-describedby="basic-addon2">
            @method('delete')
            <button type="submit"  class=" position-relative btn btn-outline-danger btn-sm">ELIMINAR<span class="position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-danger p-2"><span class="visually-hidden">°</span></span>
            </button>
        </form>
        </td>
    </tr>


    </li>




@endforeach
</table>
</ul>

{{$administradore->links()}}


@endsection
@section('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@if (session('eliminar')=='ok')
<script>

Swal.fire(
      '!Eliminado!',
      'El tramite se elimino con exito',
      'success'
    )
</script>

@endif
<script>

    $('.eliminar-tramite').submit(function (e){
        e.preventDefault();

        Swal.fire({
  title: '¿ESTAS SEGURO?',
  text: "ESTE TRAMITE SE ELIMINARA DE PANTEONES",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: '!Si, Eliminar!',
  cancelButtonText: '!cancelar!',
}).then((result) => {
  if (result.isConfirmed) {
  /*  */
    this.submit();
  }
})

    });
/**/
</script>

@endsection
