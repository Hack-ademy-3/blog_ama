@extends('layouts.app')
@section('title', 'Crea un nuevo artículo')
@section('content')
<div class="row">

    <div class="col-12">
    
        <h1>{{$article->name}}</h1>
        <small>{{$article->created_at}}</small>
        <hr>

        {{$article->content}}



    
    </div>

</div>
@endsection