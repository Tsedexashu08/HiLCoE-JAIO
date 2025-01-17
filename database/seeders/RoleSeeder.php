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
        //creating roles to assign to our users.
        $Faculty = Role::create(['name' => 'Faculty']);
        $Admin = Role::create(['name' => 'Admin']);
        $Student = Role::create(['name' => 'Student']);

        //assigning the roles specific permissions(stuff they'll be able to do).
        $Admin->givePermissionTo(ModelsPermission::all());
        $Faculty->givePermissionTo([
            'create message',
            'read message',
            'update message',
            'delete message',
            'create chat',
            'update chat',
            'read chat',
            'update chat',
            'create event',
            'read event',
            'delete event',
            'create resource',
            'read resource',
            'create job listing',
            'read job listing',
            'update job listing',
            'delete job listing',
            'create post',
            'read post',
            'like post',
            'delete post',
            'provide feedback',

        ]);
        $Student->givePermissionTo([
            'create message',
            'read message',
            'create chat',
            'read chat',
            'update chat',
            'read event',
            'read resource',
            'read job listing',
            'create post',
            'read post',
            'like post',
            'provide feedback',
        ]);
    }
}
