@extends('layouts.main')
@section('title','Bitacora')
@section('contenido')

<link rel="stylesheet" href="dist/css/bootstrap">

<div class="d-grid gap-2">
    <center><p class="h1" >Bitacora</p></center>
    <form action="{{route('bitacoras.create')}}" method="">
        <button type="submit" name="nuevo" value="PANTEONES" class="btn btn-outline-success btn-lg" >NUEVO</button>
    </form>

</div>
<br>
<div >
    <H3>ORDENAR POR :</H3>
    <form >
    <button type="submit"    name="firmados" value="FIRMADOS" class="btn btn-outline-info"> FIRMADOS</button>
     <button type="submit" style="margin-left: 10px"  name="nofirmados" value="NO FIRMADOS"    class="btn btn-outline-info" > NO FIRMADOS</button>
      <button type="submit" style="margin-left: 10px"  name="fecha" value="fecha"  class="btn btn-outline-info" > FECHA</button>
    </form>
    </div>


@if ($query)

    <div class="alert alert-primary" role="alert">
       los resultados para tu busqueda '{{$query}}' son :
      </div>

@endif
<ul>
<table class="table table-responsive table-striped table-hover">
  <tr>
      <td>ID</td>
    <td>FECHA</td>
    <td>NOMBRE</td>
    <td>No. OFICIO</td>
    <td>DIRIGIDO A </td>
    <td>AREA CORRESPONDIENTE</td>
       <td>VER</td>
    <td>EDITAR</td>
    <td>ELIMINAR</td>
    </tr>



@foreach($bitacoras as $bitacora )



    <li>


      <tr>

        <td> {{$bitacora->id}}</td>
        <td> {{$bitacora->fecha}}</td>
        <td> {{$bitacora->nombre}}</td>
        <td> {{$bitacora->n_oficio}}</td>
       <td> {{$bitacora->dirigido}}</td>
       <td> {{$bitacora->area}}</td>

       <td>
        <form action="{{route('bitacoras.show', $bitacora)}}" method="">
     <button type="submit" class="btn btn-outline-success" class="btn btn-primary btn-sm">VER</button>
 </form>
 </td>

     <td><form action="{{route('bitacoras.edit',$bitacora)}}" method="">
         @csrf
         <button type="submit" class="btn btn-outline-primary" class="btn btn-primary btn-sm">EDITAR</button>
       </form>
       </td>

     <td><form class="eliminar-tramite" action="{{route('bitacoras.destroy', $bitacora)}}" method="POST">
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

{{$bitacoras->links()}}


@endsection
@section('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@if (session('eliminar')=='ok')
<script>

Swal.fire(
      '!Eliminado!',
      'Esta bitacora se elimino con exito',
      'success'
    )
</script>

@endif
<script>

    $('.eliminar-tramite').submit(function (e){
        e.preventDefault();

        Swal.fire({
  title: '¿ESTAS SEGURO?',
  text: "ESTA BITACORA SE ELIMINARA",
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
