<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     */
    public function run(): void
    {
       User::create([
       'name'=>'admin',
        'email'=>'nanda@gmail.com',
        'password'=>bcrypt('rahasia')
       ]);
       User::create([
        'name'=>'admin',
         'email'=>'nandaz@gmail.com',
         'password'=>bcrypt('yowes')
       ]);
    }
}

