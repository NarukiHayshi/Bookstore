@extends('layouts.app')

@section('content')
    @include('commons.pagitop', ['user' => $user])
    <div style="margin-top: 50px;">
        @include('users.users', ['users' => $users])
    </div>
@endsection