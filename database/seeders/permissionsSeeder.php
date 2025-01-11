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
    
            // Notifications
            Permission::create(['name' => 'read notifications']);
            Permission::create(['name' => 'mark notification as read']);
    
            // Events
            Permission::create(['name' => 'create event']);
            Permission::create(['name' => 'read event']);
            Permission::create(['name' => 'update event']);
            Permission::create(['name' => 'delete event']);
    
            // Event Registrations
            Permission::create(['name' => 'register for event']);
            Permission::create(['name' => 'read registrations']);
    
            // Resources
            Permission::create(['name' => 'create resource']);
            Permission::create(['name' => 'read resource']);
            Permission::create(['name' => 'update resource']);
            Permission::create(['name' => 'delete resource']);
    
            // Job Listings
            Permission::create(['name' => 'create job listing']);
            Permission::create(['name' => 'read job listing']);
            Permission::create(['name' => 'update job listing']);
            Permission::create(['name' => 'delete job listing']);
    
            // Internship Listings
            Permission::create(['name' => 'create internship listing']);
            Permission::create(['name' => 'read internship listing']);
            Permission::create(['name' => 'update internship listing']);
            Permission::create(['name' => 'delete internship listing']);
    
            // Discussion Forums
            Permission::create(['name' => 'create forum']);
            Permission::create(['name' => 'read forum']);
            Permission::create(['name' => 'update forum']);
            Permission::create(['name' => 'delete forum']);
    
            // Forum Posts
            Permission::create(['name' => 'create post']);
            Permission::create(['name' => 'read post']);
            Permission::create(['name' => 'update post']);
            Permission::create(['name' => 'delete post']);
    
            // Forum Likes
            Permission::create(['name' => 'like post']);
    
            // Forum Feedback
            Permission::create(['name' => 'provide feedback']);
    
            // General Posts
            Permission::create(['name' => 'create general post']);
            Permission::create(['name' => 'read general post']);
            Permission::create(['name' => 'update general post']);
            Permission::create(['name' => 'delete general post']);
    
        
    }
}
