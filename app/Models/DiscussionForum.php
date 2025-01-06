<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiscussionForum extends Model
{
    protected $table = 'discussion_forums';
    protected $primaryKey = 'forum_id';
    protected $fillable = [
        'topic',
    ];

    public function posts()
    {
        return $this->hasMany(ForumPost::class, 'forum_id');
    }

    public function postsWithImages()
    {
        return $this->posts()->with('forum_images','user');
    }
    
}
