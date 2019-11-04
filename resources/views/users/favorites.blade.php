@extends('layouts.app')

@section('content')
    @include('commons.pagitop', ['user' => $user])
    @include('users.navtabs',['user' => $user])
    <div style="margin-top: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 offset-sm-1">
                    <table class="table table-striped table-bordered" style="background-color: white;">
                        <tr>
                            <th>ユーザー</th>
                            <th>タイトル</th>
                            <th>著者</th>
                            <th>ボタン</th>
                        </tr>
                        @foreach($books as $book)
                        <tr>
                            <td> <img class="mr-2 rounded" src="{{ Gravatar::src($book->user->email, 50) }}">{!! link_to_route('users.show',$book->user->name,['id' => $book->user->id]) !!}</td>
                            <td><p class="mb-0">{!! nl2br(e($book->author)) !!}</p></td>
                            <td><p class="mb-0">{!! nl2br(e($book->title)) !!}</p></td>
                            <td>@include('favorites.favorite_button')</td>
                        </tr>
                    </table>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection