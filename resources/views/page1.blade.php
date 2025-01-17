@extends('dashboard')
@section('content')
    <style>
        .p1 {
            height: 100vh;
        }
    </style>
    <div class="p1">
        <h2>currently Logged in user is: {{ Auth::user()->name }}</h2>
        @foreach ($posts as $post )
        <h2>{{$post}}</h2>
            
        @endforeach
    </div>
@endsection
