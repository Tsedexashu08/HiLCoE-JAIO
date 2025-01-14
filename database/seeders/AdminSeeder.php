<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
        /**
         * Run the database seeds.
         */
        public function run(): void
        {
                User::create([
                        'name' => 'Makeda Yonas',
                        'profile_picture' => 'profile_pics/maki.jpg',
                        'role' => 'Admin',
                        'email' => 'maki@gmail.com',
                        'password' => bcrypt('maki1234'),
                ]);
                User::create([
                        'name' => 'Natinayel Zemedkun',
                        'profile_picture' => 'profile_pics/nati.jpg',
                        'role' => 'Admin',
                        'email' => 'nati@gmail.com',
                        'password' => bcrypt('nati1234'),
                ]);
                User::create([
                        'name' => 'Fikir Bisrat',
                        'profile_picture' => 'profile_pics/fi.jpg',
                        'role' => 'Admin',
                        'email' => 'brownie@gmail.com',
                        'password' => bcrypt('brownierocks123'),
                ]);
        }
}
