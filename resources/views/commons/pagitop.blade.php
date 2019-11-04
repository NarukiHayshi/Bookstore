<div class="text-center">
    <h1 style="font-family: cursive; font-size: 100px; color: rgb(211,0,222);">Bookstore</h1>
   
    <div>
        <img class="mr-2 rounded img-thumbnails" src="{{ Gravatar::src($user->email,50) }}" alt="" style="height:100px; width: 100px;">
    </div>
    <div class="container">
        <div class="row">
            <div class="btn mx-auto d-block" style="margin-top: 20px;">
                @if(\Auth::id() !== $user->id)
                    @include('user_follow.follow_button',['user' => $user])
                @endif
            </div>
        </div>
    </div>
</div>
