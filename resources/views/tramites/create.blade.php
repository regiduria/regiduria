@extends('layouts.main')
@section('title','crear')
@section('contenido')

<p class="h1">Crear Nuevo Archivo</p>



<br>

<br>
    <br>
<form action="{{route('tramites.store')}}" method="POST">
@csrf
<button type="submit" id="boton" name="enviar" value="calcular" class="btn btn-primary position-relative">borrador</button>
<br>


<div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text">
        CLAVE:</label>
            <input type="text"  class="form-control" aria-label="Username" id="clave" onkeyup="javascript:this.value=this.value.toUpperCase();" aria-describedby="basic-addon1" name ='clave' value="{{old('clave')}}">

    </div>


@if ($narea== 'SERVICIOS')
<div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text">
            AREA: </label>
                <input type="text" name ='area' class="form-control" aria-label="Username" onkeyup="javascript:this.value=this.value.toUpperCase();" aria-describedby="basic-addon1" id="area" readonly="readonly" value="SERVICIOS MUNICIPALES" value="{{old('area')}}">
    </div>
    @else
     @if ($narea=='COMERCIO')
     <div class="input-group input-group mb-3">
        <label for="exampleFormControlInput1" class="input-group-text">
                AREA: </label>
                    <input type="text" name ='area' class="form-control" aria-label="Username" onkeyup="javascript:this.value=this.value.toUpperCase();" aria-describedby="basic-addon1" id="area" readonly="readonly" value="COMERCIO EN VIA PUBLICA" value="{{old('area')}}">
        </div>
     @else
     <div class="input-group input-group mb-3">
        <label for="exampleFormControlInput1" class="input-group-text">
                AREA: </label>
                    <input type="text" name ='area' class="form-control" aria-label="Username" onkeyup="javascript:this.value=this.value.toUpperCase();" aria-describedby="basic-addon1" id="area" readonly="readonly" value={{$narea}} value="{{old('area')}}">
        </div>
     @endif
@endif



    <div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text">
      TIPO DE TRAMITE: </label>
            <input type="text" class="form-control" aria-label="Username" onkeyup="javascript:this.value=this.value.toUpperCase();" aria-describedby="basic-addon1" name ='tipo_tramite' id="tipo_tramite" value="{{old('tipo_tramite')}}">

    @error('tipo_tramite')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror
    </div>
    <div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text">
        NUMERO DE OFICIO:</label>
            <input type="text"  class="form-control" aria-label="Username" id="numero_oficio" onkeyup="javascript:this.value=this.value.toUpperCase();" aria-describedby="basic-addon1" name ='numero_oficio' value="{{old('numero_oficio')}}">

    </div>
    <div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text" >
    FECHA DEL TRAMITE:
            <input type="date" name ='fecha_tramite' id="fecha_tramite" value="{{old('fecha_tramite')}}">
    </label>
    </div>
    <div class="input-group input-group mb-3">
    <label  for="exampleFormControlInput1" class="input-group-text">
    FECHA DE RECIBIDO:
             <input type="datetime" class="form-control" name="fecha_recibido" id="fecha_recibido"  value="<?php echo date("Y-m-d");?>" value="{{old('fecha_recibido')}}">
    </label>
    </div>
    <div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text">
        DESCRIPCION DEL TRAMITE:
    </label>
           <textarea name="descripcion_tramite" onkeyup="javascript:this.value=this.value.toUpperCase();"class="form-control"  id="descripcion_tramite" rows="5" value="{{old('descripcion_tramite')}}"></textarea>

    </div>
    <div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text">
        NOMBRE DEL SUSCRITO:</label>
            <input type="text" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" id="nombre_suscrito" name ='nombre_suscrito' value="{{old('nombre_suscrito')}}">

    @error('nombre_suscrito')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror
    </div>
    <div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text">
        CARGO DEL SUSCRITO:</label>
            <input type="text" class="form-control" name ='cargo'onkeyup="javascript:this.value=this.value.toUpperCase();" id="cargo" value="{{old('cargo')}}">

    </div>
    <div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text">
        TELEFONO:
            <input type="text" class="form-control" name ='telefono' id="telefono" value="{{old('telefono')}}">
    </label>
    </div>
    <div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text">
        DIRIGIDO:  </label>
            <input type="text" class="form-control" name ='dirigido'id="dirigido" onkeyup="javascript:this.value=this.value.toUpperCase();" value="Luis Arturo Diaz Covarrubias" value="{{old('dirigido')}}">

    </div>
    <div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text">
        cargo del dirigido: </label>
            <input type="text" class="form-control" name ='cargo_dirigido' id="cargo_dirigido" onkeyup="javascript:this.value=this.value.toUpperCase();" value="Regidor de Panteones,Bienes,Servicios Municipales y Mercados y Comercio en Via publica" value="{{old('cargo_dirigido')}}">

    </div>
    <div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text">
        ESTADO DEL TRAMITE:
            <input type="text" class="form-control" name ='estado' id="estado" onkeyup="javascript:this.value=this.value.toUpperCase();" value="{{old('estado')}}">
    </label>
    @error('estado')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror
    </div>

    <div class="input-group input-group mb-3">
        <label for="exampleFormControlInput1" class="input-group-text">
           CLAVE DEL LICENCIADO QUE LLEVA LA DOCUMENTACION: </label>
                <input type="text" class="form-control" name ='lic_dirige' id="lic_dirige" onkeyup="javascript:this.value=this.value.toUpperCase();" value="{{old('lic_dirige')}}">


        </div>
    <div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text">
        UBICACION: </label>
            <input type="text" class="form-control" name ='ubicacion'id="ubicacion" onkeyup="javascript:this.value=this.value.toUpperCase();" value="{{old('ubicacion')}}">

    @error('ubicacion')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror
    </div>
    <div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text">
        NOMBRE DE LA CARPETA: </label>
            <input type="text" class="form-control" name ='nombre_carpeta' id="nombre_carpeta" onkeyup="javascript:this.value=this.value.toUpperCase();" value="{{old('nombre_carpeta')}}">

    @error('nombre_carpeta')
    <br>
    <small color='red'>*{{$message}}</small>
    <br>
    @enderror
    </div>
    <div class="input-group input-group mb-3">
        <label for="exampleFormControlInput1" class="input-group-text">
            NUMERO DE CONTROL DE LA CARPETA:
                <input type="text" class="form-control" name ='nc_carpeta' id="nc_carpeta" onkeyup="javascript:this.value=this.value.toUpperCase();" value="{{old('nc_carpeta')}}">
        </label>
        @error('nombre_carpeta')
        <br>
        <small color='red'>*{{$message}}</small>
        <br>
        @enderror
        </div>
    <div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text">
        OBSERVACIONES:
    </label>
           <textarea name="observaciones" class="form-control" id="observaciones" onkeyup="javascript:this.value=this.value.toUpperCase();" rows="5" value="{{old('observaciones')}}"></textarea>

    </div>
    <button type="submit" name="enviar2" value="eliminar" class="btn btn-primary position-relative">enviar</button>
</form>


@endsection

@section('js')
<script>
    $(document).ready(){
        $('#valor').on('click',function(){ //Esto escucha el evento de click sobre tu botón
                 $.get( "script.php", { // Aquí pones tu php que procesa el valor
                    valor: $('#valor').val()  // recoges el valor
                   });
              },function(data)
                {
                    alert("Valor recibido"); // Esto es el callback, se ejecuta tras que se ha devuelto respuesta del servidor
                });
    };

    //aqui realizamos la comprobacion de los imput si tiene algo este proceso es para el boton borrador.
    </script>
    <script type="text/javascript">
    document.getElementById("boton").onclick=sumar;
        function sumar(){
            var div0 = document.getElementById("clave").value;
             if(div0 ==""){document.getElementById("clave").value = "-";}else{document.getElementById("clave").value = div0;}
             var div1 = document.getElementById("area").value;
             if(div1 ==""){document.getElementById("area").value = "-";}else{document.getElementById("area").value = div1;}
            var div2 = document.getElementById("tipo_tramite").value;
             if(div2 ==""){document.getElementById("tipo_tramite").value = "-";}else{document.getElementById("tipo_tramite").value = div2;}
            var div3 = document.getElementById("numero_oficio").value;
             if(div3 ==""){document.getElementById("numero_oficio").value = "-";}else{document.getElementById("numero_oficio").value = div3;}
             var div4 = document.getElementById("fecha_tramite").value;
             if(div4 ==""){document.getElementById("fecha_tramite").value = "-";}else{document.getElementById("fecha_tramite").value = div4;}
             var div5 = document.getElementById("fecha_recibido").value;
             if(div5 ==""){document.getElementById("fecha_recibido").value = "-";}else{document.getElementById("fecha_recibido").value = div5;}
             var div6 = document.getElementById("descripcion_tramite").value;
             if(div6 ==""){document.getElementById("descripcion_tramite").value = "-";}else{document.getElementById("descripcion_tramite").value = div6;}
             var div7 = document.getElementById("nombre_suscrito").value;
             if(div7 ==""){document.getElementById("nombre_suscrito").value = "-";}else{document.getElementById("nombre_suscrito").value = div7;}
             var div8 = document.getElementById("cargo").value;
             if(div8 ==""){document.getElementById("cargo").value = "-";}else{document.getElementById("cargo").value = div8;}
             var div9 = document.getElementById("telefono").value;
             if(div9 ==""){document.getElementById("telefono").value = "-";}else{document.getElementById("telefono").value = div9;}
             var div10 = document.getElementById("dirigido").value;
             if(div10 ==""){document.getElementById("dirigido").value = "-";}else{document.getElementById("dirigido").value = div10;}
             var div11 = document.getElementById("cargo_dirigido").value;
             if(div11 ==""){document.getElementById("cargo_dirigido").value = "-";}else{document.getElementById("cargo_dirigido").value = div11;}
             var div12 = document.getElementById("estado").value;
             if(div12 ==""){document.getElementById("estado").value = "-";}else{document.getElementById("estado").value = div12;}
             var div13 = document.getElementById("ubicacion").value;
             if(div13 ==""){document.getElementById("ubicacion").value = "-";}else{document.getElementById("ubicacion").value = div13;}
             var div14 = document.getElementById("nombre_carpeta").value;
             if(div14 ==""){document.getElementById("nombre_carpeta").value = "-";}else{document.getElementById("nombre_carpeta").value = div14;}
             var div15 = document.getElementById("observaciones").value;
             if(div15 ==""){document.getElementById("observaciones").value = "-";}else{document.getElementById("observaciones").value = div15;}
             var div16 = document.getElementById("nc_carpeta").value;
             if(div16 ==""){document.getElementById("nc_carpeta").value = "-";}else{document.getElementById("nc_carpeta").value = div16;}
             var div17 = document.getElementById("lic_dirige").value;
             if(div17 ==""){document.getElementById("lic_dirige").value = "-";}else{document.getElementById("lic_dirige").value = div17;}

             //alert(align);


        }


    </script>
@endsection
