@if (Auth::id() != $user->id)
    <div>
        @if(Auth::user()->is_following($user->id))
            <div class="text-center">
                {!! Form::open(['route' => ['user.unfollow', $user->id], 'method' => 'delete']) !!}
                    {!! Form::submit('Unfollow', ['class' => "btn btn-danger "]) !!}
                {!! Form::close() !!}
            </div>
        @else
            <div class="text-center">
                {!! Form::open(['route' => ['user.follow', $user->id]]) !!}
                    {!! Form::submit('Follow', ['class' => "btn btn-primary"]) !!}
                {!! Form::close() !!}
            </div>
        @endif
    </div>
@endif