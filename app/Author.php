<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = ['book_id', 'name'];
    
    public function book(){
        return $this->belongsTo(Book::class);
    }
}
