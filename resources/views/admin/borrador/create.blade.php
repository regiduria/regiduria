@extends('layouts.main')
@section('title','crear')
@section('contenido')

<p class="h1">Crear Nuevo Archivo</p>



<br>

<br>
    <br>
<form action="{{route('tramites.store')}}" method="POST">
@csrf
<button type="submit" id="boton" name="enviar" value="calcular">borrador</button>


<div class="input-group input-group mb-3">
<label for="exampleFormControlInput1" class="input-group-text">
        AREA: </label>
            <input type="text" name ='area' class="form-control" aria-label="Username" onkeyup="javascript:this.value=this.value.toUpperCase();" aria-describedby="basic-addon1" id="area" value="{{old('area')}}">
</div>

    <div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text">
        tipo de tramite: </label>
            <input type="text" class="form-control" aria-label="Username" onkeyup="javascript:this.value=this.value.toUpperCase();" aria-describedby="basic-addon1" name ='tipo_tramite' id="tipo_tramite" value="{{old('tipo_tramite')}}">

    @error('tipo_tramite')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror
    </div>
    <div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text">
        numero de oficio:</label>
            <input type="text"  class="form-control" aria-label="Username" id="numero_oficio" onkeyup="javascript:this.value=this.value.toUpperCase();" aria-describedby="basic-addon1" name ='numero_oficio' value="{{old('numero_oficio')}}">

    </div>
    <div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text" >
    fecha del tramite:
            <input type="date" name ='fecha_tramite' id="fecha_tramite" value="{{old('fecha_tramite')}}">
    </label>
    </div>
    <div class="input-group input-group mb-3">
    <label  for="exampleFormControlInput1" class="input-group-text">
    fecha recibido:
             <input type="datetime" class="form-control" name="fecha_recibido" id="fecha_recibido"  value="<?php echo date("Y-m-d");?>" value="{{old('fecha_recibido')}}">
    </label>
    </div>
    <div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text">
        descripcion del tramite:
    </label>
           <textarea name="descripcion_tramite" onkeyup="javascript:this.value=this.value.toUpperCase();"class="form-control"  id="descripcion_tramite" rows="5" value="{{old('descripcion_tramite')}}"></textarea>

    </div>
    <div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text">
        Nombre del Suscrito:</label>
            <input type="text" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" id="nombre_suscrito" name ='nombre_suscrito' value="{{old('nombre_suscrito')}}">

    @error('nombre_suscrito')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror
    </div>
    <div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text">
        Cargo del Suscrito:</label>
            <input type="text" class="form-control" name ='cargo'onkeyup="javascript:this.value=this.value.toUpperCase();" id="cargo" value="{{old('cargo')}}">

    </div>
    <div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text">
        telefono:
            <input type="text" class="form-control" name ='telefono' id="telefono" value="{{old('telefono')}}">
    </label>
    </div>
    <div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text">
        Dirigido:  </label>
            <input type="text" class="form-control" name ='dirigido'id="dirigido" onkeyup="javascript:this.value=this.value.toUpperCase();" value="Luis Arturo Diaz Covarrubias" value="{{old('dirigido')}}">

    </div>
    <div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text">
        cargo del dirigido: </label>
            <input type="text" class="form-control" name ='cargo_dirigido' id="cargo_dirigido" onkeyup="javascript:this.value=this.value.toUpperCase();" value="Regidor de Panteones,Bienes,Servicios Municipales y Mercados y Comercio en Via publica" value="{{old('cargo_dirigido')}}">

    </div>
    <div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text">
        estado del tramite:
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
        ubicacion:
            <input type="text" class="form-control" name ='ubicacion'id="ubicacion" onkeyup="javascript:this.value=this.value.toUpperCase();" value="{{old('ubicacion')}}">
    </label>
    @error('ubicacion')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror
    </div>
    <div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text">
        Nombre de la carpeta:
            <input type="text" class="form-control" name ='nombre_carpeta' id="nombre_carpeta" onkeyup="javascript:this.value=this.value.toUpperCase();" value="{{old('nombre_carpeta')}}">
    </label>
    @error('nombre_carpeta')
    <br>
    <small color='red'>*{{$message}}</small>
    <br>
    @enderror
    </div>
    <div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text">
        Observaciones:
    </label>
           <textarea name="observaciones" class="form-control" id="observaciones" onkeyup="javascript:this.value=this.value.toUpperCase();" rows="5" value="{{old('observaciones')}}"></textarea>

    </div>
    <button type="submit" name="enviar"  class="btn btn-primary position-relative">enviar</button>
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
    </script>
    <script type="text/javascript">
    document.getElementById("boton").onclick=sumar;
        function sumar(){
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

             //alert(align);


        }


    </script>
@endsection
