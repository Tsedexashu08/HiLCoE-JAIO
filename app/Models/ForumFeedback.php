<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ForumFeedback extends Model
{
    protected $table = 'forum_feedback';
    protected $fillable = [
        'post_id',
        'user_id',
        'content',
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
