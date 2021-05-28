@extends('layouts.main')
@section('title','editar')
@section('contenido')


<div class="d-grid gap-2">

    <center><p class="h1" >EDITAR USUARIO </p></center>

    <form action="{{route('auth.create')}}" method="">
        <button type="submit" class="btn btn-outline-success btn-lg" >CAMBIAR  CONTRASEÑA</button>
    </form>

</div>

<br>
<form action="{{route('auth.update', $auth)}}" method="POST">
@csrf
@method('put')

<div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text">
            NOMBRE: </label>
                <input type="text" name ='name' class="form-control" aria-label="Username" onkeyup="javascript:this.value=this.value.toUpperCase();" aria-describedby="basic-addon1"  value="{{old('name',$auth->name)}}">
    </div>

    <div class="input-group input-group mb-3">
        <label for="exampleFormControlInput1" class="input-group-text">
                EMAIL: </label>
                    <input type="text" name ='email' class="form-control" aria-label="Username"  aria-describedby="basic-addon1"  value="{{old('name',$auth->email)}}">
        </div>

        <div class="input-group input-group mb-3">
            <label for="exampleFormControlInput1" class="input-group-text">
                    TELEFONO: </label>
                        <input type="text" name ='telefono' class="form-control" aria-label="Username"  aria-describedby="basic-addon1"  value="{{old('name',$auth->telefono)}}">
            </div>


@if ($auth->tipo == 'ADMINISTRADOR')
<fieldset>
    <legend>CARGO</legend>
    <label>
        <input type="radio" name="tipo" value="ADMINISTRADOR" checked> ADMINISTRADOR
    </label>
    <label>
        <input type="radio" name="tipo" value="USUARIO" > USUARIO
    </label>

</fieldset>
@else
<fieldset>
    <legend>CARGO</legend>
    <label>
        <input type="radio" name="tipo" value="ADMINISTRADOR" > ADMINISTRADOR
    </label>
    <label>

        <input type="radio" name="tipo" value="USUARIO" checked > USUARIO
    </label>

</fieldset>
@endif
<fieldset>
<p>
    <legend>Cambiar contraseña</legend>
  </p>
  <p>
    <input type="radio" name="interesado" value="si" id="interesadoPositivo"  > Sí
    <input type="radio" name="interesado" value="no" id="interesadoNegativo" checked> No
  </p>
</fieldset>
<div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text">
           CONTRASEÑA: </label>
                <input type="text" name ='password' class="form-control" aria-label="Username"id="emailInput"  aria-describedby="basic-addon1"  >
    </div>

  </p>

  <button type="submit" name="enviar2" value="eliminar" class="btn btn-primary position-relative">ACTUALIZAR</button>
</form>


@endsection

@section('js')
<script>
var emailInput = document.getElementById('emailInput');

// evento para el input radio del "si"
document.getElementById('interesadoPositivo').addEventListener('click', function(e) {

  emailInput.disabled = false;
});

// evento para el input radio del "no"
document.getElementById('interesadoNegativo').addEventListener('click', function(e) {

  emailInput.disabled = true;
});
</script>
@endsection
