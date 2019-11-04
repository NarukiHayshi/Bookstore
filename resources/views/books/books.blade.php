
   
        <div class="row" style="margin-top:40px;">
            <div class="col-md-10 offset-md-1">
                
                <table class="table table-striped table-bordered table-responsive" style="background-color: white;">
                    <tr>
                        <th class="text-center">ユーザー</th>
                        
                        <th class="text-center">投稿時間</th>
                        <th class="text-center">著者</th>
                        <th class="text-center">タイトル</th>
                        <th class="text-center">ボタン</th>
                        
                    </tr>
                    @foreach ($books as $book)
                    <tr>
                        <td class="text-center"><img class="mr-3 rounded" src="{{ Gravatar::src($book->user->email, 50) }}">
                        <br>    {!! link_to_route('users.show', $book->user->name, ['id' => $book->user->id]) !!}</td>
                        <td class="text-center"><span class="text-muted">{{ $book->created_at }}</span></td>
                        <td class="text-center"><p class="mb-0">{!! nl2br(e($book->author)) !!}</p></td>
                        <td class="text-center"><p class="mb-0">{!! nl2br(e($book->title)) !!}</p></td>
                        <td class="text-center">@include('favorites.favorite_button')
                        @if (Auth::id() == $book->user_id)
                                {!! Form::open(['route' => ['books.destroy', $book->id], 'method' => 'delete']) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                {!! Form::close() !!}
                        @endif</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    <div class="pagination justify-content-center">
                {{ $books->links('pagination::bootstrap-4') }}
    </div>

