@extends('layouts.plantilla')
@section('title','loggin')


@section ('content')


<form  action="{{route('home.login')}}"  method="POST" class="login-form">
    @csrf
    <p class="login-text">
      <span class="fa-stack fa-lg">
        <i class="fa fa-circle fa-stack-2x"></i>
        <i class="fa fa-lock fa-stack-1x"></i>
      </span>
    </p>
    <input type="email" class="login-username"  name="email" autofocus="true" required="true" placeholder="Email" />
    <input type="password" class="login-password" name="password" required="true" placeholder="Password" />
    <input type="submit" name="Login" value="Login" class="login-submit" />
  </form>
  <a href="#" class="login-forgot-pass">forgot password?</a>
  <div class="underlay-photo"></div>
  <div class="underlay-black"></div>
@endsection
