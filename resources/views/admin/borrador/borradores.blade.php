@extends('layouts.main')
@section('title','borradores')


@section('contenido')

<link rel="stylesheet" href="dist/css/bootstrap">



<ul>
<table class="table table-responsive table-striped table-hover">
  <tr>
    <td>Area</td>
    <td>tipo de tramite</td>
    <td>numero de oficio</td>

    <td>fecha del tramite</td>
    <td>fecha de recibido</td>

    <td>nombre del suscrito</td>
    <td>telefono</td>
    <td>estado del tramite</td>
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
       <td> {{$tramite->numero_oficio}}</td>

       <td> {{$tramite->fecha_tramite}}</td>
       <td> {{$tramite->fecha_recibido}}</td>

       <td> {{$tramite->nombre_suscrito}}</td>
       <td> {{$tramite->telefono}}</td>
       <td> {{$tramite->estado}}</td>

       <td><form action="{{route('admin.borrador.edit',$tramite)}}" method="">
        @csrf
        <button type="submit" class="btn btn-outline-primary" class="btn btn-primary btn-sm">EDITAR</button>
      </form>
      </td>


    <td><form  class="restaurar-tramite" action="{{route('admin.borrador.destroy', $tramite->id)}}" method="">

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
      '!ELIMINADO!',
      'El borrador se ELIMINO con exito',
      'success'
    )
</script>

@endif
<script>

    $('.restaurar-tramite').submit(function (e){
        e.preventDefault();

        Swal.fire({
  title: '¿ESTAS SEGURO?',
  text: "ESTE BORRADOR SE ELIMINARA",
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
