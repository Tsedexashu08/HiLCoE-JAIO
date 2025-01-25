<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ForumPost extends Model
{
    protected $table = 'forum_posts';
    protected $fillable = [
        'forum_id',
        'user_id',
        'content',
    ];




    public function forum_images()

    {

        return $this->hasMany(forum_post_image::class, 'post_id', 'post_id');
    }

    public function forum()
    {
        return $this->belongsTo(DiscussionForum::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function likes()
    {
        return $this->hasMany(ForumLike::class, 'post_id', 'post_id');
    }

    public function feedback()
    {
        return $this->hasMany(ForumFeedback::class, 'post_id', 'post_id');
    }
}
