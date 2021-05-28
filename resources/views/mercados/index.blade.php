@extends('layouts.main')
@section('title','Mercados')


@section('contenido')

<link rel="stylesheet" href="dist/css/bootstrap">

<div class="d-grid gap-2">
    <center><p class="h1" >MERCADOS</p></center>
    <form action="{{route('tramites.create')}}" method="">
        <button type="submit" name="nuevo" value="MERCADOS" class="btn btn-outline-success btn-lg" >nuevo</button>
    </form>

</div>

<br>

<div >
    <H3>ORDENAR POR :</H3>
    <form >
    <button type="submit"    name="fechatramite" value="FECHA DEL TRAMITE" class="btn btn-outline-info"> FECHA DEL TRAMITE</button>
     <button type="submit" style="margin-left: 10px"  name="fecharecibido" value="FECHA DE RECIBIDO"    class="btn btn-outline-info" > FECHA DE RECIBIDO</button>
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
      <td>CLAVE</td>
    <td>TIPO DE TRAMITE</td>
    <td>NUMERO DE OFICIO</td>
    <td>FECHA DEL TRAMITE</td>
    <td>FECHA DE RECIBIDO</td>
    <td>NOMBRE DEL SUSCRITO</td>

    <td> </td>
    <td></td>
    <td></td>

    </tr>



@foreach($tramites as $tramite )



    <li>


      <tr>

       <td>{{$tramite->clave}}</td>
       <td> {{$tramite->tipo_tramite}}</td>
       <td> {{$tramite->numero_oficio}}</td>
       <td> {{$tramite->fecha_tramite}}</td>
       <td> {{$tramite->fecha_recibido}}</td>
       <td> {{$tramite->nombre_suscrito}}</td>

       <td>
           <form action="{{route('tramites.show', $tramite->id)}}" method="">
        <button type="submit" class="btn btn-outline-success" class="btn btn-primary btn-sm">VER</button>
    </form>
    </td>

        <td><form action="{{route('tramites.edit',$tramite)}}" method="">
            @csrf
            <button type="submit" class="btn btn-outline-primary" class="btn btn-primary btn-sm">EDITAR</button>
          </form>
          </td>

        <td><form class="eliminar-tramite" action="{{route('tramites.destroy', $tramite)}}" method="POST">
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
  text: "ESTE TRAMITE SE ELIMINARA DE MERCADOS",
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
