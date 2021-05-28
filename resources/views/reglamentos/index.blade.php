@extends('layouts.main')
@section('title','Reglamentos')
@section('contenido')

<link rel="stylesheet" href="dist/css/bootstrap">

<div class="d-grid gap-2">

    <center><p class="h1" >REGLAMENTOS</p></center>

    <form action="{{route('reglamentos.create')}}" method="">
        <button type="submit" class="btn btn-outline-success btn-lg" >nuevo</button>
    </form>

</div>
<br>

<ul>

<table class="table table-responsive table-striped table-hover">
  <tr>
    <td>AREA</td>
    <td>NOMBRE</td>

    <td>FECHA DE EMITIDO</td>

    </tr>



@foreach($reglamentos as $reglamento )




    <li>


      <tr>

       <td> {{$reglamento->area}}</td>
       <td> {{$reglamento->nombre}}</td>
       <td> {{$reglamento->fecha_emitido}}</td>

       <td>
        <form action="{{route('reglamentos.show', $reglamento)}}" method="">
     <button type="submit" formtarget = "_ blank" class="btn btn-outline-success" class="btn btn-primary btn-sm">VER</button>
 </form>
 </td>
 <td><form class="eliminar-tramite" action="{{route('reglamentos.destroy', $reglamento)}}" method="POST">
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

{{$reglamentos->links()}}


@endsection
@section('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@if (session('eliminar')=='ok')
<script>

Swal.fire(
      '!Eliminado!',
      'El Reglamento se elimino con exito',
      'success'
    )
</script>

@endif
<script>

    $('.eliminar-tramite').submit(function (e){
        e.preventDefault();

        Swal.fire({
  title: '¿ESTAS SEGURO?',
  text: "ESTE REGLAMENTO SE ELIMINARA",
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
