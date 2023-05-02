@extends('layouts.app')

@section('content')
<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

    <img src="{{ asset('images/secretary.png')}}" alt="images">
    <h1 class="text-blue-700 text-2x1 font-bold">Categories</h1> <br>
    <p>Please select the information you want: </p>
         
    <hr>
    <br>
<ul class="list-none">

    @foreach ($categories as $category)

    <li class="my-2">
        <a href="{{ route('categories.options', $category->id) }}">{{ $category->name }}</a>
    </li>
    
   @endforeach

</ul>
    

   </div>
    
@endsection



