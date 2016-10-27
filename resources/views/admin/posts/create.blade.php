@extends('template')
@section('title')
    Blog Com laravel 5
@endsection

@section('content')
    <h1> Create new Post</h1>

    @if($errors->any())
        <ul class="alert">
            @foreach($errors->all() as $error)
               <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route'=>'admin.posts.store','method'=>'POST']) !!}

    <!--Title form input -->

    @include('admin.posts._form')


    <div class="form-group">
        {!! Form::label('tags','Tags:',['class'=>'control-label']) !!}
        {!! Form::textarea('tags',null,['class'=> 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Create Post',['class'=>'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@endsection