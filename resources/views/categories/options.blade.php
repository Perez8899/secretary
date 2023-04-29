@extends('layouts.app')

@section('content')

<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
    <h1>Options</h1> <br>
    
         
<ul class="list-none">

    @foreach ($options as $option)
    <li class="my-2">
        <a href="{{ route('categories.suboptions', $option->id) }}">{{ $option->name }}</a>
    </li>
    @endforeach
</ul>
   </div>
    
   @endsection
