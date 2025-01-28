<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class permissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    // General Permissions
    // Messages
    Permission::create(['name' => 'create message']);
    Permission::create(['name' => 'read message']);
    Permission::create(['name' => 'update message']); 
    Permission::create(['name' => 'delete message']); 

    // Chat
    Permission::create(['name' => 'create chat']);
    Permission::create(['name' => 'read chat']);
    Permission::create(['name' => 'update chat']); 
    Permission::create(['name' => 'delete chat']); 

    // Chat Messages
    Permission::create(['name' => 'send chat message']);
    Permission::create(['name' => 'read chat messages']);
    Permission::create(['name' => 'update chat message']); 
    Permission::create(['name' => 'delete chat message']); 

    // Events
    Permission::create(['name' => 'create event']);
    Permission::create(['name' => 'read event']);
    Permission::create(['name' => 'update event']);
    Permission::create(['name' => 'delete event']);

    // Event Registrations
    Permission::create(['name' => 'register for event']);
    Permission::create(['name' => 'read registrations']); // View registrations

    // Resources
    Permission::create(['name' => 'create resource']);
    Permission::create(['name' => 'read resource']);
    Permission::create(['name' => 'update resource']); // For own resources
    Permission::create(['name' => 'delete resource']); // For own resources

    // Job Listings
    Permission::create(['name' => 'create job listing']);
    Permission::create(['name' => 'read job listing']);
    Permission::create(['name' => 'update job listing']); 
    Permission::create(['name' => 'delete job listing']); 

    // Internship Listings
    Permission::create(['name' => 'create internship listing']);
    Permission::create(['name' => 'read internship listing']);
    Permission::create(['name' => 'update internship listing']); // For own internship listings
    Permission::create(['name' => 'delete internship listing']); // For own internship listings

    // Discussion Forums
    Permission::create(['name' => 'create forum']);
    Permission::create(['name' => 'read forum']);
    Permission::create(['name' => 'update forum']); // For own forums
    Permission::create(['name' => 'delete forum']); // For own forums

    // Forum Posts
    Permission::create(['name' => 'create post']);
    Permission::create(['name' => 'read post']);
    Permission::create(['name' => 'update post']); // For own posts
    Permission::create(['name' => 'delete post']); // For own posts

    // Forum Likes
    Permission::create(['name' => 'like post']);
    Permission::create(['name' => 'unlike post']); // If applicable

    // Forum Feedback
    Permission::create(['name' => 'provide feedback']);
    Permission::create(['name' => 'edit feedback']); // For own feedback
    Permission::create(['name' => 'delete feedback']); // For own feedback

    // General Posts
    Permission::create(['name' => 'create general post']);
    Permission::create(['name' => 'read general post']);
    Permission::create(['name' => 'update general post']); // For own general posts
    Permission::create(['name' => 'delete general post']); // For own general posts
}
}
