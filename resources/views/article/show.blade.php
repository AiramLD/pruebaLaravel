@extends('layouts.master')

@section('content')

    <h1>List of Articles</h1>
    <h2>{{ $article->id }}</h2>
    <h2> {{ $article->name }}</h2>
    <h3> {{ $article->price }}</h3>
    @if ($article->stock)
        <h4> Hay stock de {{ $article->stock }} unidades</h4>
    @else
        <h4> No hay stock</h4>
    @endif

@endsection
