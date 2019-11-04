@extends('layouts.app')

@section('content')
    <div class="text-center" style="margin: 50px;">
        <h1 style="font-size: 100px;">Log in</h1>
    </div>
    <div class="container"> 
        <div class="row">
            <div class="col-sm-6 offset-sm-3">
                {!! Form::open(['route' => 'login.post']) !!}
                    <div class="form-group">
                        {!! Form::label('email', 'Email') !!}
                        {!! Form::email('email', old('name'),['class' => 'form-control']) !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('password', 'Password') !!}
                        {!! Form::password('password', ['class' => 'form-control']) !!}
                    </div>
                    {!! Form::submit('Log in', ['class' => 'btn btn-primary btn-block']) !!}
                {!! Form::close() !!}
                
                <p class="mt-2">New user? {!! link_to_route('signup.get', 'Sign up now!') !!}</p>
            </div>
        </div>
    </div>
@endsection 