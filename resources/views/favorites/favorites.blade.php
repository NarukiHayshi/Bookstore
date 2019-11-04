<ul class="media-list">
    <div class="col-sm-6 offset-sm-3">
        @foreach ($favorites as $favorite)
            <li class="media mb-3">
                <img class="mr-2 rounded" src="{{ Gravatar::src($book->user->email, 50) }}">
                <div class="media-body d-flex justify-content-between align-items-start">
                    <div>
                        {!! link_to_route('users.show', $book->user->name, ['id' => $book->user->id]) !!} <span class="text-muted">posted at {{ $book->created_at }}</span>
                    </div>
                    <div>
                        <p class="mb-0">{!! nl2br(e($book->title)) !!}</p>
                        <p class="mb-0">{!! nl2br(e($book->author)) !!}</p>
                    </div>
                    <div>
                        @if (Auth::id() == $book->user_id)
                            {!! Form::open(['route' => ['books.destroy', $book->id], 'method' => 'delete']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                        @endif
                    </div>
                    @include('favorites.favorite_button')
                </div>
            </li>
        @endforeach
        {{ $books->links('pagination::bootstrap-4') }}
    </div>
</ul>