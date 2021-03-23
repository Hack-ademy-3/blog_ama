@extends('layouts.app')
@section('title', 'Crea un nuevo artículo')
@section('content')

<div class="row">
    <div class="col-12">
        <form action='{{route('articles.make')}}' method='POST'>
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre del artículo</label>
                <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    name='name'>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Contenido del artículo</label>
                <textarea id="article-text" class="form-control" rows='15' name='content'></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Seleciona los tags asociados</label>
                <select class="form-select" multiple aria-label="multiple select example" name="tags[]">
                @foreach($tags as $tag)
                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Crear</button>
        </form>
    </div>
</div>

@endsection
