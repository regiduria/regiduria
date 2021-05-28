@extends('layouts.main')
@section('title','Administradores')
@section('contenido')




       <div class="input-group input-group mb-3">
        <label for="exampleFormControlInput1" class="input-group-text"> AREA: </label>
                <input type="text" name ='area' class="form-control" readonly="readonly" aria-label="Username" onkeyup="javascript:this.value=this.value.toUpperCase();" aria-describedby="basic-addon1"  value="{{$administradore->area}}">
    </div>

    <div class="input-group input-group mb-3">
        <label for="exampleFormControlInput1" class="input-group-text"> NOMNRE: </label>
                <input type="text" name ='nombre' class="form-control" readonly="readonly" aria-label="Username" onkeyup="javascript:this.value=this.value.toUpperCase();" aria-describedby="basic-addon1"  value="{{$administradore->nombre}}">
    </div>
    <div class="input-group input-group mb-3">
        <label for="exampleFormControlInput1" class="input-group-text"> CARGO: </label>
                <input type="text" name ='cargo' class="form-control" readonly="readonly" aria-label="Username" onkeyup="javascript:this.value=this.value.toUpperCase();" aria-describedby="basic-addon1"  value="{{$administradore->cargo}}">
    </div>
   <div class="input-group input-group mb-3">
            <label for="exampleFormControlInput1" class="input-group-text"> LUGAR DONDE DESEMPEÑA:</label>
                    <input type="text" name ='lugar' class="form-control" readonly="readonly" aria-label="Username" onkeyup="javascript:this.value=this.value.toUpperCase();" aria-describedby="basic-addon1"  value="{{$administradore->lugar}}">
     </div>

     <div class="input-group input-group mb-3">
        <label for="exampleFormControlInput1" class="input-group-text"> TELEFONO:</label>
                <input type="text" name ='telefono' class="form-control" readonly="readonly" aria-label="Username" onkeyup="javascript:this.value=this.value.toUpperCase();" aria-describedby="basic-addon1"  value="{{$administradore->telefono}}">
 </div>
 <div class="input-group input-group mb-3">
    <label for="exampleFormControlInput1" class="input-group-text"> EMAIL:</label>
            <input type="text" name ='email' class="form-control" readonly="readonly" aria-label="Username" onkeyup="javascript:this.value=this.value.toUpperCase();" aria-describedby="basic-addon1"  value="{{$administradore->email}}">
</div>

       <div class="main"><button class="button" style="vertical-align:middle"><a href="#" class="icon-button twitter"><i class="icon-twitter"></i><span></span></button></a>
  <div class="text"><strong>TWEET!</strong></div>
</div>

@endsection
