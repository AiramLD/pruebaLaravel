@extends('layouts.master')

@section('content')
  <h1>List of Articles</h1>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Stock</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($articles as $article)
      <tr>
        <td>{{ $article->id }}</td>
        <td>{{ $article->name }}</td>
        <td>{{ $article->price }}</td>
        <td>{{ $article->stock }}</td>
      </tr>
      @endforeach
  </table>
@endsection