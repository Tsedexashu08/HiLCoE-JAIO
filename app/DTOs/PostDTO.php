<?php
namespace App\DTOs;
class PostDTO
{
    public int $post_id;
    public string $content;
    public UserDTO $user;
    public array $images;
    public string $created_at;
    public array $feedback;

    public function __construct(int $postId, string $content, UserDTO $user, array $images, string $createdAt, array $feedback)
    {
        $this->post_id = $postId;
        $this->content = $content;
        $this->user = $user;
        $this->images = $images;
        $this->created_at = $createdAt;
        $this->feedback = $feedback;
    }
}