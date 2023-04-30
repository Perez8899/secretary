@extends('layouts.appOptions')

@section('content')

<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

    <img src="{{ asset('images/secretary.png')}}" alt="images">

    <h1 class="text-blue-700 text-2x1 font-bold">Options</h1> 
    <p class="">select the type of information you require: </p><br>
    
         <hr>
         <br>
<ul class="list-none">

    @foreach ($options as $option)
    <li class="my-2">
        <a href="{{ route('categories.suboptions', $option->id) }}">{{ $option->name }}</a>
    </li>
    @endforeach
</ul>

<br>

<a href="{{route('categories.index')}}" class="border border-blue-500
           rounded px-4 pt-1 h-10 bg-green-200 text-blue-500 font-semibold mx-2">
           BACK</a>
   </div>
    
   @endsection
