@extends('layout')


@section('content')

  <h1>my hello app ... {!!$m!!}</h1>
  
  <ul>
 @foreach ($task as $task)
   
    <li>{{$task}}</li>

 @endforeach 
</ul>
     



@endsection
