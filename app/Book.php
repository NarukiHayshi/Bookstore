<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Book;

class Book extends Model
{
    protected $fillable = ['title','author', 'user_id',];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function favorite_users()
    {
        return $this->belongsToMany(User::class, 'favorites', 'book_id', 'user_id')->withTimestamps();
    }
    
    public function title(){
        return $this->hasMany(Title::class);
        
    }
    public function author(){
        return $this->hasMany(Author::class);
    }
}
