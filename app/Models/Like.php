<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikeItem extends Model
{
    use HasFactory;
    
    public function likes()
    {
        return $this->belongsToMany('App\Models\Post','likes','user_id','post_id')->withTimestamps();
    }
    public function isLike($postId)
    {
        return $this->likes()->where('post_id',$oistId)->exists();
    }
    public function like($postId)
    {
        if($this->isLike($postId)){
            
        }else{
            $this->likes()->attach($postId);
        }
    }
    public function unlike($postId)
    {
        if($this->isLike($postId)){
            $this->likes()->detach($postId);
        }else{
        }
    }
}
