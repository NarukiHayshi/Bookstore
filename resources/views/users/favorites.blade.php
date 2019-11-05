@extends('layouts.app')

@section('content')
    @include('commons.pagitop', ['user' => $user])
    @include('users.navtabs',['user' => $user])
    <div style="margin-top: 50px;">
        
            <div class="row">
                <div class="col-sm-10 offset-sm-1">
                    <table class="table table-striped table-bordered" style="background-color: white;">
                        <tr>
                            <th class="text-center">トプ画</th>
                            <th class="text-center"> 名前</th>
                            <th class="text-center">タイトル</th>
                            <th class="text-center">著者</th>
                            <th class="text-center">ボタン</th>
                        </tr>
                        @foreach($books as $book)
                        <tr>
                            <td class="text-center"> <img class="mr-2 rounded" src="{{ Gravatar::src($book->user->email, 50) }}"></td>
                            <td class="text-center">{!! link_to_route('users.show',$book->user->name,['id' => $book->user->id]) !!}</td>
                            <td class="text-center"><p class="mb-0">{!! nl2br(e($book->author)) !!}</p></td>
                            <td class="text-center"><p class="mb-0">{!! nl2br(e($book->title)) !!}</p></td>
                            <td class="text-center">@include('favorites.favorite_button')</td>
                        </tr>
                        @endforeach
                    </table>
                    
                </div>
            </div>
       
    </div>
@endsection