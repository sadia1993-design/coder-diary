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
        \DB::statement('SET FOREIGN_KEY_CHECKS=0');
        \DB::table('users')->truncate();
       User::create([
          'name' => 'Coder Dairy',
          'username' => 'coder',
          'email' => 'admin@example.com',
          'password' => \bcrypt('123456'),
          'email_verified_at' => now(),
          'image' => 'https://picsum.photos/300'
       ]);

       \DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
