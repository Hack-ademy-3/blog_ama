@extends('layouts.app')
@section('title', 'Crea un nuevo artículo')
@section('content')

<div class="row">

    <form action='{{route('articles.make')}}' method='POST'>
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nombre del artículo</label>
          <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='name'>
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Contenido del artículo</label>
          <textarea class="form-control" rows='15' name='content'></textarea>
         
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
      </form>
</div>

@endsection