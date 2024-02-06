@extends('layouts.master')

@section('content')
<h1>Mostrando el Articulo {{$article->id}}</h1>
<h2>{{$article->name}}</h2>
<h3>{{$article->price}}€</h3>
<form action="{{route('article.destroy', $article)}}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" value="Eliminar articulo" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
</form>
@if($article->stock)
<h4>Hay {{$article->stock}} unidades</h4>
@else
<h4>Producto agotado</h4>
@endif

@endsection
