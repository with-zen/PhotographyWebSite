<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'title',
        'caption',
        'tags',
    ];
    public function comments(){
        return $this->morphMany(Comment::class,'commentable');
    }
}
