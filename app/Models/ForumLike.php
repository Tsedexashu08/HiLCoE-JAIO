<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ForumLike extends Model
{
    protected $table = 'forum_likes';
    protected $fillable =[
        'post_id',
        'user_id',
    ];

    
    public function post()
    {
        return $this->belongsTo(ForumPost::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
