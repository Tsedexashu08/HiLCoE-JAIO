<?php
namespace App\DTOs;
class UserDTO
{
    public string $name;
    public string $role;
    public string $profilePicture;

    public function __construct(string $name, string $role, string $profilePicture)
    {
        $this->name = $name;
        $this->role = $role;
        $this->profilePicture = $profilePicture;
    }
}