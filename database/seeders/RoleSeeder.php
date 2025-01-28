<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Contracts\Permission;
use Spatie\Permission\Models\Permission as ModelsPermission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating roles to assign to our users.
        $Admin = Role::create(['name' => 'Admin']);
        $Faculty = Role::create(['name' => 'Faculty']);
        $Student = Role::create(['name' => 'Student']);
    
        // Assigning the roles specific permissions (stuff they'll be able to do).
        
        // Admin permissions
        $Admin->givePermissionTo(ModelsPermission::all());
    
        // Faculty permissions
        $Faculty->givePermissionTo([
            'create message',
            'read message',
            'update message', // For own messages
            'delete message', // For own messages
            'create chat',
            'read chat',
            'update chat', // For own chats
            'delete chat', // For own chats
            'create event',
            'read event',
            'update event',
            'delete event',
            'create resource',
            'read resource',
            'update resource', // For own resources
            'delete resource', // For own resources
            'create job listing',
            'read job listing',
            'create post',
            'read post',
            'delete post', // For own posts
            'like post',
            'provide feedback',
            'edit feedback', // For own feedback
            'delete feedback', // For own feedback
        ]);
    
        // Student permissions
        $Student->givePermissionTo([
            'create message',
            'read message',
            'create chat',
            'read chat',
            'update chat', 
            'delete chat',
            'register for event',
            'read event',
            'read resource',
            'read job listing',
            'create post',
            'read post',
            'update post',
            'delete post', 
            'like post',
            'provide feedback',
            'edit feedback', 
            'delete feedback', 
        ]);
    }
}
