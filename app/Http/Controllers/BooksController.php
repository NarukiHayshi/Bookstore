<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class BooksController extends Controller
{
    public function index()
    {
        $data =[];
        if(\Auth::check()){
            $user = \Auth::user();
            $books = $user->feed_books()->orderBy('created_at', 'desc')->paginate(10);
            
            $data = [
                'user' => $user,
                'books' => $books,
                ];
        }
        return view('users.timeline',$data);
    }
    public function store(Request $request)
    {
        
        $this->validate($request,[
            'title' => 'required|max:191',
            'author' => 'required|max:191',
            
            
            
            ]);
        
       
            
        $request->user()->books()->create([
            'title' => $request->title,
            'author' => $request->author,
            
             
            
            ]);
            
            
        return back();
    }
    public function destroy($id)
    {
        $book = \App\Book::find($id);

        if (\Auth::id() === $book->user_id)  {
            $book->delete();
        }
        return back();
    }
    
    
}
