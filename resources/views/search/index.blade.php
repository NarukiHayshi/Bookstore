@extends('layouts.app')

@section('content')
    @include('commons.pagitop', ['user' => $user])
    <div class="container" style="margin-top: 20px; margin-right: -5px;">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form class="form-inline">
                    <div class="form-froup">
                        <input type="text" name="keyword" value="{{ $keyword }}"
                        placholder="タイトル">
                        <input type="submit" value="検索">
                    </div>
                </form>
            </div>
        </div>
    </div>
   
    
@endsection