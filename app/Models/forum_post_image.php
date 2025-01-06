<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class forum_post_image extends Model
{
    protected $table = 'forum_post_images';
    protected $primaryKey = 'image_id';
    protected $fillable = ['post_id', 'image'];
   
    public function forum_post()
    {
        return $this->belongsTo(ForumPost::class, 'post_id', 'post_id');
    }
    public static function addImage($postId, $imagePath)
    {
        return self::create([
            'post_id' => $postId,
            'image' => $imagePath,
        ]);
    }
}