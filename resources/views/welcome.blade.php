@extends('layouts.app')

@section('content')
    
    @if(Auth::check())
        @include('commons.pagitop',['user' => $user])
        <div>
            <div style="margin: 25px; background-color: white;" class="text-center">
                <h3 style="padding-top: 20px; border-bottom: 2px solid #049;">
                    <?php
                        $time = intval(date('H'));
                        if (4 <= $time && $time <= 12) {  ?>
                            <p>おはようございます。{{ $user->name }}さん</p>
                            <?php } elseif (12 <= $time && $time <= 20) {  ?>
                            <p>こんにちわ。{{ $user->name }}さん</p>
                            <?php } else { ?>
                            <p>こんばんわ。{{ $user->name }}さん</p>
                    <?php } ?>
                </h3>
                <p style="padding: 20px; font-size: 20px;">
                どうも、作成者のなるきです。<br>今年の５月からプログラミングの勉強をしていました。<br>自分の好きな本を投稿するアプリです。<br>使える機能: いいね機能/ フォロー機能/ 本の投稿機能/ 投稿の削除<br>自分の好きな本をどんどん投稿していってください！！
            </p>
            </div>
        </div>
        <div class="container" style="margin-bottom: 100px;">
            <div class="row justify-content-center">
                <div class="card col-md-4 text-center" style="margin: 10px;">
                    <div class="card-header">
                         {!! Form::open(['route' => ['timeline.get',$user->id], 'method' => 'get']) !!}
                             {!! Form::submit('Timeline',['class' => 'btn btn-outline-danger btn-block btn-lg']) !!}
                         {!! Form::close() !!}
                    </div>
                    <div class="card-body">
                        <li>フォローしたユーザの投稿一覧を表示します。</li>
                    </div>
                </div>
                <div class="card col-md-4 text-center" style="margin: 10px;">
                    <div class="card-header">
                        {!! Form::open(['route' => ['users.show',$user->id], 'method' => 'get']) !!}
                            {!! Form::submit('My profile',['class' => 'btn btn-outline-primary btn-block btn-lg']) !!}
                        {!! Form::close() !!}
                    </div>
                    <div class="card-body">
                        <li>自分のアカウントページに遷移します。</li>
                    </div>
                </div>
                <div class="card col-md-4 text-center" style="margin: 10px;">
                    <div class="card-header">
                        {!! Form::open(['route' => ['users.favorites',$user->id], 'method' => 'get']) !!}
                            {!! Form::submit('My favorites',['class' => 'btn btn-outline-success btn-block btn-lg']) !!}
                        {!! Form::close() !!}
                    </div>
                    <div class="card-body">
                        <li>いいね一覧ページに遷移します。</li>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="card col-md-4 text-center" style="margin: 10px;">
                    <div class="card-header">
                        {!! Form::open(['route' => ['books.get',$user->id], 'method' => 'get']) !!}
                            {!! Form::submit('Post books',['class' => 'btn btn-outline-warning btn-block btn-lg']) !!}
                        {!! Form::close() !!}
                    </div>
                    <div class="card-body"> 
                        <li>本の投稿ページに遷移します。</li>
                    </div>
                </div>
                <div class="card col-md-4 text-center" style="margin: 10px;">
                    <div class="card-header">
                        {!! Form::open(['route' => ['users.index',$user->id], 'method' => 'get']) !!}
                            {!! Form::submit('Users',['class' => 'btn btn-outline-info btn-block btn-lg']) !!}
                        {!! Form::close() !!}
                    </div>
                    <div class="card-body">
                        <li>ユーザ一覧ページに遷移します。</li>
                    </div>
                </div>
                <div class="card col-md-4 text-center" style="margin: 10px;">
                    <div class="card-header">
                        {!! Form::open(['route' => ['logout.get',$user->id], 'method' => 'get']) !!}
                            {!! Form::submit('Log out',['class' => 'btn btn-outline-secondary btn-block btn-lg']) !!}
                        {!! Form::close() !!}
                    </div>
                    <div class="card-body">
                        <li>ログアウトします。</li>
                    </div>
                </div>
            </div>
            
            
    @else
    
        <div class="center jumbotron" style="margin-top: 200px;">
            <div class="text-center">
                <h1 style="font-family: cursive;">Welcome to the Bookstore</h1>
            </div>
         </div>
    @endif
@endsection