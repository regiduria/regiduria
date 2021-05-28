@extends('layouts.main')
@section('title','usuarios')

@section('contenido')

<link rel="stylesheet" href="dist/css/bootstrap">

<div class="d-grid gap-2">

    <center><p class="h1" >ADMINISTRADORES ELIMINADOS </p></center>

    <form action="{{route('auth.create')}}" method="">
        <button type="submit" class="btn btn-outline-success btn-lg" >nuevo</button>
    </form>

</div>
<ul>

<table class="table table-responsive table-striped table-hover"  overflow:scroll>
  <tr>
      <td>AREA</td>
    <td>CARGO</td>
    <td>NOMBRE</td>
    <td>EMAIL</td>
    <td>TELEFONO</td>

    </tr>



@foreach($users as $user )




    <li>


      <tr>
        <td> {{$user->area}}</td>
        <td> {{$user->cargo}}</td>
        <td> {{$user->nombre}}</td>
        <td> {{$user->email}}</td>
        <td> {{$user->telefono}}</td>


        <td><form action="{{route('usuariosborrados.restaurar')}}" method="">
            <input type="hidden" name= "restaurar" class="form-control bg-light border-0 small"
            value={{$user->id}}
            aria-label="Search" aria-describedby="basic-addon2">
            <button type="submit" class="btn btn-outline-primary">RESTAURAR</button>
        </form>
        </td>

          <td><form class="eliminar-tramite" action="{{route('auth.destroy', $user)}}" method="POST">
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

{{$users->links()}}


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
