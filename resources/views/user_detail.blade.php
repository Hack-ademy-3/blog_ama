@extends('layouts.app')
@section('title', 'Estos son los artículos del señor')
@section('content')

<div class="row mb-2">
    <div class="col-12">
        @if (auth()->user()->id==$user->id)
        <h1>Aquí van tus artículos</h1>
        @else
        <h1>Aquí van los artículos de {{$user->name}}</h1>
        @endif
    </div>
    @foreach ($user->articles as $article)
    <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">World</strong>
            <h3 class="mb-0">{{$article->name}}</h3>
            <div class="mb-1 text-muted">{{$article->created_at}} by <a href="{{route('user_detail', ['id'=>$article->user->id])}}">{{$article->user->name}}</a></div>
            <p class="card-text mb-auto">{{$article->content}}</p>
            <a href="{{route('articles.show', ['id'=>$article->id])}}">Continue reading</a>
          </div>
          
           
        </div>
    </div>
    @endforeach
</div>
@endsection