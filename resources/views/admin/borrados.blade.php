@extends('layouts.main')
@section('title','Eliminados')
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
    <center><p class="h1" >TRAMITES ELIMINADOS</p></center>


</div>

<ul>
<table class="table table-responsive table-striped table-hover">
  <tr>
     <td>CLAVE</td>
    <td>AREA</td>
    <td>TIPO DE TRAMITE</td>
    <td>FECHA DEL TRAMITE</td>
    <td>FECHA DE RECIBIDO</td>
    <td>NOMBRE DEL SUSCRITO</td>

    <td> <li class="nav-item">
        <a class="nav-link collapsed"  data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
           <span> <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split">ordenar </button></span>

        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                    <form
                    class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="hidden" name= "año" class="form-control bg-light border-0 small"
                            value="año"
                            aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">
                                año
                            </button>
                        </div>
                    </div>

                 </form>

            </div>
        </div>
    </li></td>
    <td></td>
    <td></td>
    <td></td>
    </tr>



@foreach($tramites as $tramite )





    <li>


      <tr>
        <td> {{$tramite->id}}</td>
        <td> {{$tramite->area}}</td>
       <td> {{$tramite->tipo_tramite}}</td>
           <td> {{$tramite->fecha_tramite}}</td>
       <td> {{$tramite->fecha_recibido}}</td>

       <td> {{$tramite->nombre_suscrito}}</td>


       <td><form action="{{route('admin.show', $tramite->id)}}" method="">
        <input type="hidden" name= "ver" class="form-control bg-light border-0 small"
        value={{$tramite->id}}
        aria-label="Search" aria-describedby="basic-addon2">
        <button type="submit" class="btn btn-outline-success" class="btn btn-primary btn-sm">VER</button>
    </form>
    </td>

    <td><form action="{{route('admin.restore')}}" method="">
        <input type="hidden" name= "restaurar" class="form-control bg-light border-0 small"
        value={{$tramite->id}}
        aria-label="Search" aria-describedby="basic-addon2">
        <button type="submit" class="btn btn-outline-primary">RESTAURAR</button>
    </form>
    </td>


    <td><form  class="restaurar-tramite" action="{{route('admin.restore', $tramite->id)}}" method="">

        <input type="hidden" name= "restaurar" class="form-control bg-light border-0 small"
        value={{$tramite->id}}
        aria-label="Search" aria-describedby="basic-addon2">
        <button type="submit" class="position-relative btn btn-outline-danger btn-sm">ELIMINAR</button>
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
      '!Restaurado!',
      'El tramite se restauro con exito',
      'success'
    )
</script>

@endif
<script>

    $('.restaurar-tramite').submit(function (e){
        e.preventDefault();

        Swal.fire({
  title: '¿ESTAS SEGURO?',
  text: "ESTE TRAMITE SE ELIMINARA POR COMPLETO",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: '!Si, ELIMINAR!',
  cancelButtonText: '!CANCELAR!',
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
