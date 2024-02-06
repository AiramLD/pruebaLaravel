@extends('layouts.master')

@section('content')
<h1>Crear un Articulo</h1>
@if ($errors->any())
    <div class="bg-red-600">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{route('article.store')}}" method="POST">
    @csrf
    <p>
        <label for="">Nombre:</label>
        <input type="text" name="name" class="@error('name') border-red-500 @enderror" value="{{old('name')}}">
        @error('name')
            <div class="bg-red-200">
                {{ $message }}
            </div>
        @enderror
    </p>
    <p>
        <label for="">Precio</label>
        <input type="text" step="0.01" name="price" class="@error('price') border-red-500 @enderror" value="{{old('price')}}">
        @error('price')
            <div class="bg-red-200">
                {{ $message }}
            </div>
        @enderror
    </p>
    <p>
        <label for="">Stock</label>
        <input type="text" name="stock" class="@error('stock') border-red-500 @enderror" value="{{old('stock')}}">
        @error('stock')
            <div class="bg-red-200">
                {{ $message }}
            </div>
        @enderror
    </p>
    <p>
        <input type="submit" value="Crear Artículo">
    </p>
</form>
@endsection
