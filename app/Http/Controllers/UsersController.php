<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{
    public function top()
    {
        if(\Auth::check()){
            $user = \Auth::user();
            
        return view('welcome',['user' => $user]);
        }else{
            return view('welcome');
        }
        
    }
    public function index()
    {
        if(\Auth::check())  {
            $users = User::orderBy('id', 'desc')->paginate(10);
            $user = \Auth::user();
            $data = [
                'users' => $users,
                'user' => $user,
                ];
        }
        
        return view('users.index',$data);
    }
    
    public function show($id)
    {
        if ($id == \Auth::id()) {
            $user = User::find($id);
            $books = $user->books()->orderBy('created_at','desc')->paginate(10);
            
            $data = [
                'user' => $user,
                'books' => $books,
            ];
            $data += $this->counts($user);
            return view('users.show',$data);
        }else{
            $user = User::find($id);
            $books = $user->books()->orderBy('created_at','desc')->paginate(10);
            
            $data = [
                'user' => $user,
                'books' => $books,
            ];
            $data += $this->counts($user);
            return view('users.show',$data);
        }
        
        
    }
    
    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit',['user' => $user]);
    }
    
    public function update(Request $request, $id)
    {
        $this->varidate($request,[
            'name' => 'required|max:191',
        ]);
        $request->user()->create([
            'name' => $request->name,
        ]);
        
        return redirect('users.show');
    }
    public function post()
    {
        $data=[];
        if(\Auth::check()){
            $user = \Auth::user();
            $books = $user->books()->orderBy('created_at', 'desc')->paginate(10);
            
            $data = [
                'user' => $user,
                'books' => $books
                ];
        
        
        }
        return view('users.post',$data);
    }
    public function followings($id)
    {
        $user = User::find($id);
        $followings = $user->followings()->paginate(10);
        
        $data = [
            'user' => $user,
            'users' => $followings,
        ];
        $data += $this->counts($user);
        
        return view('users.followings', $data);
            
    }
    public function followers($id)
    {
        $user = User::find($id);
        $followers = $user->followers()->paginate(10);
        
        $data = [
            'user' => $user,
            'users' => $followers,
        ];
        $data += $this->counts($user);
        
        return view('users.followers', $data);
    }
    public function favorites($id)
    {
        $user = User::find($id);
        $favorites = $user->favorites()->paginate(10);
        
        $data = [
            'user' => $user,
            'books' => $favorites,
        ];
        $data += $this->counts($user);
        
        return view('users.favorites',$data);
    }
 
    
}
