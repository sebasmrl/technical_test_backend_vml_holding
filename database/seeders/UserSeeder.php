<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()
        ->count(12)
        ->hasLeans(4)
        ->create();

        User::factory()
        ->count(8)
        ->hasLeans(2)
        ->create();
        
        User::factory()
        ->count(19)
        ->hasLeans(7)
        ->create();
    }
}
