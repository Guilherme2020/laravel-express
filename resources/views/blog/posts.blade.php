
@extends('bt');
@section('title')
   Blog Com laravel 5
@endsection
@section('content');
    <h1>Posts</h1>

    <ul>

        @foreach($posts as $post)

            <p>{{$post}}</p>

        @endforeach

    </ul>

@stop
