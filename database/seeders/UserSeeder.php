<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!User::count()) {
            $users = [
                ['name' => 'John', 'email' => 'john@example.com'],
                ['name' => 'ali', 'email' => 'ali@example.com'],
                ['name' => 'leyla', 'email' => 'leyla@example.com'],
            ];
            foreach ($users as $user) {
                User::create($user);
            }
        }
    }
}