@extends('layouts.app')

@section('content')
    @include('commons.pagitop', ['user' => $user])
    @if(Auth::id() == $user->id)
    <div class="container col-sm-6 offset-sm-3">
        {!! Form::open(['route' => 'books.store','files' => true]) !!}
            <div class="form-group">
                {!! Form::label('title', 'タイトル') !!}
                {!! Form::text('title', old('title'), ['class' => 'form-control','row' => '2']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('author', '著者') !!}
                {!! Form::text('author', old('author'), ['class' => 'form-control', 'row' => '2']) !!}
            </div>
            
            
            
                {!! Form::submit('投稿',['class' => 'btn btn-dark btn-block']) !!}
           
        {!! Form::close() !!}
       
        
    </div>
    @include('books.books', ['books' => $books])
    @endif
@endsection