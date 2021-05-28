@extends('layouts.main')
@section('title','Correspondencia')


@section('contenido')

<link rel="stylesheet" href="dist/css/bootstrap">

<div class="d-grid gap-2">
    <center><p class="h1" >CORRESPONDENCIAS</p></center>
    <form action="{{route('correspondencias.create')}}" method="">
        <button type="submit" name="nuevo" value="PANTEONES" class="btn btn-outline-success btn-lg" >NUEVO</button>
    </form>
<br>
</div>
@if ($query)

    <div class="alert alert-primary" role="alert">
       los resultados para tu busqueda '{{$query}}' son :
      </div>

@endif

<ul>
<table class="table table-responsive table-striped table-hover">
  <tr>
    <td>tipo de tramite</td>
    <td>numero de oficio</td>

    <td>fecha del tramite</td>
    <td>fecha de recibido</td>

    <td>nombre del suscrito</td>
    <td>telefono</td>

    <td> </td>
    <td></td>
    <td></td>
    <td></td>
    </tr>



@foreach($correspondencias as $correspondencia )



    <li>


      <tr>


        <td> {{$correspondencia->tipo_tramite}}</td>
        <td> {{$correspondencia->numero_oficio}}</td>

        <td> {{$correspondencia->fecha_tramite}}</td>
        <td> {{$correspondencia->fecha_recibido}}</td>

        <td> {{$correspondencia->nombre_suscrito}}</td>
        <td> {{$correspondencia->telefono}}</td>


        <td><form action="{{route('correspondencias.edit',$correspondencia)}}" method="">
            @csrf
            <button type="submit" class="btn btn-outline-primary" class="btn btn-primary btn-sm">DIRIGIR </button>
          </form>
        </td>
         <td><form class="eliminar-tramite" action="{{route('correspondencias.destroy', $correspondencia)}}" method="POST">
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

{{$correspondencias->links()}}


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
  text: "ESTE TRAMITE SE ELIMINARA DE CORRESPONDENCIAS",
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
