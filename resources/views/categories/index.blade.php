@extends('layouts.app')

@section('content')
    <h1>Categorías</h1>
    <ul>
        @foreach ($categories as $category)
            <li><a href="/category/{{ $category->id }}">{{ $category->name }}</a></li>
        @endforeach
    </ul>
@endsection

@foreach ($categories as $category)
    <a href="{{ route('category.options', $category->id) }}">{{ $category->name }}</a>
@endforeach

