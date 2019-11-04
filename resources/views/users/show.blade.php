@extends('layouts.app')

@section('content')
    @include('commons.pagitop', ['user' => $user])
    @include('users.navtabs', ['user' => $user])
    @if(count($books) > 0)
        <div style="margin-top:20px;">
            @include('books.books', ['books' => $books])
        </div>
    @endif
     
@endsection