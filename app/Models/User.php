<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'profile_picture',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }


    public function messagesSent()
    {
        return $this->hasMany(Message::class, 'sender_id');
    }

    public function messagesReceived()
    {
        return $this->hasMany(Message::class, 'receiver_id');
    }

    public function chatsUser1()
    {
        return $this->hasMany(Chat::class, 'user_id_1');
    }

    public function chatsUser2()
    {
        return $this->hasMany(Chat::class, 'user_id_2');
    }

    public function chatMessages()
    {
        return $this->hasMany(ChatMessage::class, 'sender_id');
    }

    public function eventsRegistered()
    {
        return $this->hasMany(EventRegistration::class);
    }

    public function forumPosts()
    {
        return $this->hasMany(ForumPost::class);
    }


    public function forumLikes()
    {
        return $this->hasMany(ForumLike::class);
    }

    public function forumFeedback()
    {
        return $this->hasMany(ForumFeedback::class);
    }

    public function appliedCareers()
    {
        return $this->hasMany(appliedcareers::class);
    }
}
