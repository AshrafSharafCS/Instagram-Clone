<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'caption',
        'image',
        'user_id'
    ];

    public function comment(){
        return $this->hasMany(Comment::class);
     }

     public function like(){
        return $this->hasMany(Like::class);
     }

     public function user(){
        return $this->belongsTo(User::class);
     }

     public function getLikes(){
      return $this->like()->count();
     }
}
