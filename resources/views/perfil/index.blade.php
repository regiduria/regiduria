@extends('layouts.main')
@section('title','Perfil')
@section('contenido')




<br>


@foreach($user as $user )





      <div class="input-group input-group mb-3">
        <label for="exampleFormControlInput1" class="input-group-text">
                NOMBRE: </label>
                    <input type="text" name ='name' class="form-control" aria-label="Username" onkeyup="javascript:this.value=this.value.toUpperCase();" aria-describedby="basic-addon1"  value="{{old('name',$user->name)}}">
        </div>

        <div class="input-group input-group mb-3">
            <label for="exampleFormControlInput1" class="input-group-text">
                    EMAIL: </label>
                        <input type="text" name ='email' class="form-control" aria-label="Username"  aria-describedby="basic-addon1"  value="{{old('name',$user->email)}}">
            </div>

            <div class="input-group input-group mb-3">
                <label for="exampleFormControlInput1" class="input-group-text">
                        TELEFONO: </label>
                            <input type="text" name ='email' class="form-control" aria-label="Username"  aria-describedby="basic-addon1"  value="{{old('name',$user->telefono)}}">
                </div>
                <td><form action="{{route('perfil.edit',$user)}}" method="">
                    @csrf
                    <button type="submit" class="btn btn-outline-primary" class="btn btn-primary btn-sm">EDITAR</button>
                  </form>
                  </td>

@endforeach






@endsection
