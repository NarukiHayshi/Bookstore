<div class="row">
@if(count($users) > 0)
    <div class="col-sm-10 offset-sm-1" style="margin-top: 50pxpx;">
        <table class="table table-striped table-borderd" style="background-color: white;">
            <tr class="text-center">
                <th class="text-center">画像</th>
                <th class="text-center">ユーザ名</th>
                <th class="text-center">ボタン</th>
            </tr>
            @foreach($users as $user)
            <tr class="text-center">
                <td class="text-center"> <img class="mr-2 rounded" 
                src="{{ Gravatar::src($user->email,50) }}" alt=""></td>
                <td class="text-center"> {{ $user->name }}<p>{!! link_to_route('users.show', 'View profile',
                ['id' => $user->id]) !!}</p></td>
                <td class="text-center">@include('user_follow.follow_button',['user' => $user])</td>
            </tr>
            @endforeach
            </table>
        <div class="pagination justify-content-center">
            {{ $users->links('pagination::bootstrap-4') }}
        </div>
    </div>
    
@endif    
</div>


            
               