@extends('layouts.app')

@section('content')
    @include('commons.pagitop',['user' => $user])
    @if(count($books) >0)
        @include('books.books', ['books' => $books])
    @endif
@endsection