<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ForumFeedback extends Model
{
    protected $table = 'forum_feedback';
    protected $primaryKey = 'comment_id';
    protected $fillable = [
        'post_id',
        'user_id',
        'content',
    ];
    public function post()
    {
        return $this->belongsTo(ForumPost::class,'post_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
