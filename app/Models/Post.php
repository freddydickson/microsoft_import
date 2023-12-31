<?php

namespace App\Models;

use App\Models\Like;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        // 'user_id',
        'body'
        
    ];

    //this will return a boolean vlaue if user already liked a comment
    public function likedBy(User $user){
        return $this->likes->contains('user_id', $user->id);
    }

   public function user(){
       return $this->belongsTo(User::class);
   }

   public function likes(){
       return $this->hasMany(Like::class);
   }
}
