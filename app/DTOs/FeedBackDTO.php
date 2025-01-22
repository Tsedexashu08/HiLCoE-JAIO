<?php

namespace App\DTOs;

class FeedbackDTO
{
    public int $commentId;
    public string $content;
    public UserDTO $user;

    public function __construct(int $commentId, string $content, UserDTO $user)
    {
        $this->commentId = $commentId;
        $this->content = $content;
        $this->user = $user;
    }
}
