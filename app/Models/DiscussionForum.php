<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiscussionForum extends Model
{
    protected $table = 'discussion_forums';
    public function posts()
    {
        return $this->hasMany(ForumPost::class);
    }
}
