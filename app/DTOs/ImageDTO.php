<?php
namespace App\DTOs;
class ImageDTO
{
    public string $image;

    public function __construct(string $image)
    {
        $this->image = $image;
    }
}