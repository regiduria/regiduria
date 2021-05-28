@extends('layouts.main')
@section('title','Panteones')
@section('contenido')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <form action="{{route('reglamentos.store')}}" method="post" enctype="multipart/form-data" >
                @csrf
                <div class="input-group input-group mb-3">
                    <label for="exampleFormControlInput1" class="input-group-text">
                        AREA: </label>
                            <input type="text" class="form-control" name ='area' id="cargo_dirigido" onkeyup="javascript:this.value=this.value.toUpperCase();"  value="{{old('area')}}">

                    </div>
                    <div class="input-group input-group mb-3">
                        <label for="exampleFormControlInput1" class="input-group-text">
                            NOMBRE: </label>
                                <input type="text" class="form-control" name ='nombre' id="cargo_dirigido" onkeyup="javascript:this.value=this.value.toUpperCase();" value="{{old('nombre')}}">
                                @error('nombre')
                                <br>
                                <small>*{{$message}}</small>
                                <br>
                                @enderror
                        </div>

                        <div class="input-group input-group mb-3">
                            <label for="exampleFormControlInput1" class="input-group-text">
                                FECHA DE EMISION: </label>
                                    <input type="date" class="form-control" name ='fecha_emitido' id="cargo_dirigido" onkeyup="javascript:this.value=this.value.toUpperCase();"  value="{{old('fecha_emitido')}}">

                            </div>
                        <label for="exampleFormControlInput1" class="input-group-text">
                            subir archivo: </label>
                  <div class="input-group input-group mb-3">
                      <input type="file" name="ubicacion" >
                      @error('ubicacion')
                      <br>
                      <small>*{{$message}}</small>
                      <br>
                      @enderror
                    </div>

                <button type="submit"  class="btn btn-primary position-relative">enviar</button>

            </form>

        </div>
    </div>
</div>

@endsection
@section('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@if (session('nombre')=='ok')
<script>

Swal.fire(

      'porfavor nombra el documento',

    )
</script>

@endif
@if (session('pdf')=='ok')
<script>

Swal.fire(

      'porfavor inserta  el documento',

    )
</script>

@endif
@endsection
