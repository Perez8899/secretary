@extends('layouts.app')


@section('content')
<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
    <h1>Categorías</h1> <br>
         
<ul class="list-none">
    @foreach ($categories as $category)
    <li class="my-2">
        <a href="{{ route('categories.options', $category->id) }}">{{ $category->name }}</a>
    </li>
    
   @endforeach

</ul>
    

   </div>
    
@endsection



