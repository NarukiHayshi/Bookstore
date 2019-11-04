@if (Auth::user()->is_favorite($book->id))
    <div>
        {!! Form::open(['route' => ['favorites.unfavorite', $book->id], 'method' => 'delete']) !!}
            {!! Form::submit('取り消し', ['class' => "btn btn-light btn-sm"]) !!}
        {!! Form::close() !!}
    </div>
@else
    <div>
        {!! Form::open(['route' => ['favorites.favorite', $book->id]]) !!}
            {!! Form::submit('いいね♡' ,['class' => "btn btn-success btn-sm"]) !!}
        {!! Form::close() !!}
    </div>
@endif