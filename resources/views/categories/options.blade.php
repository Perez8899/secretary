@extends('layouts.app')

@section('content')
    <h1>{{ $category->name }}</h1>
    <
    
    @foreach ($options as $option)
    <a href="{{ route('option.suboptions', $option->id) }}">{{ $option->name }}</a>
@endforeach
