<?php
namespace App\DTOs;
class ForumDTO
{
    public string $topic;
    public string $createdAt;
    public array $posts;

    public function __construct(string $topic, string $createdAt, array $posts)
    {
        $this->topic = $topic;
        $this->createdAt = $createdAt;
        $this->posts = $posts;
    }
}