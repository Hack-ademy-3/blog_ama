@extends('layouts.app')
@section('title', 'Bienvenidos al Blog A.M.A')
@section('content')

<div class="row">
  <div class="col-12 col-md-6">
  <div class="h1">Login</div>
    <form action='{{route('login')}}' method='POST'>
        @csrf
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='email'>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Contraseña</label>
          <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='password'>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
      </form>
  </div>
  <div class="col-12 col-md-6">
  <div class="h1">Registro</div>
    <form action='{{route('register')}}' method='POST'>
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='name'>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='email'>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Contraseña</label>
          <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='password'>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Confirma contraseña</label>
          <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='password_confirmation'>
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
      </form>
  </div>
</div>

@endsection