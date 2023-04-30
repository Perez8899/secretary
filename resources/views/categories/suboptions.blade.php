@extends('layouts.appSubOption')

@section('content')

<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

    <img src="{{ asset('images/secretary.png')}}" alt="images">

    <h1 class="text-blue-700 text-2x1 font-bold">SubOptions</h1> <br>
    
    
    <hr>
    <br>

      <ul class="list-none">

          @foreach ($suboptions as $suboption)
          <li class="my-2">
              <p>{{ $suboption->name }}</p>
          </li>
          @endforeach
      </ul>

      <br>
      <a href="{{ route('categories.options',['id'=>$option->category_id]) }}" class="border border-blue-500
           rounded px-4 pt-1 h-10 bg-green-200 text-blue-500 font-semibold mx-2">
           BACK</a>
      <a href="{{route('categories.index')}}" class="border border-blue-500
        rounded px-4 pt-1 h-10 bg-green-200 text-blue-500 font-semibold mx-2">
        MAIN MENU</a> 
    
</div>
    
@endsection