@extends('layouts.master')

@section('content')
<h1>Editar el Articulo {{$article->id}}</h1>
@if ($errors->any())
    <div class="bg-red-600">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{route('article.update', 'article')}}" method="POST">
    @csrf
    @method('PUT')
    <p>
        <label for="">Nombre:</label>
        <input type="text" name="name" class="@error('name') border-red-500 @enderror" value="{{old('name', $article->name)}}">
        @error('name')
            <div class="bg-red-200">
                {{ $message }}
            </div>
        @enderror
    </p>
    <p>
        <label for="">Precio</label>
        <input type="text" step="0.01" name="price" class="@error('price') border-red-500 @enderror" value="{{old('price', $article->price)}}">
        @error('price')
            <div class="bg-red-200">
                {{ $message }}
            </div>
        @enderror
    </p>
    <p>
        <label for="">Stock</label>
        <input type="text" name="stock" class="@error('stock') border-red-500 @enderror" value="{{old('stock', $article->stock)}}">
        @error('stock')
            <div class="bg-red-200">
                {{ $message }}
            </div>
        @enderror
    </p>
    <p>
        <input type="submit" value="Modificar Artículo">
    </p>
</form>
@endsection
