@extends('layouts.app')
@section('title', 'Bienvenidos al Blog A.M.A')
@section('content')

<div class="row">
  <div class="col-12">
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
        <button type="submit" class="btn btn-primary">Registrar</button>
      </form>
  </div>
</div>

@endsection