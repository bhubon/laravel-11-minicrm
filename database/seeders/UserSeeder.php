<?php

namespace Database\Seeders;

use App\RoleEnum;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'first_name' => 'Nil',
            'last_name' => 'Sd',
            'email' => 'admin@gmail.com',
            'password' => '11111111',
        ])->syncRoles(RoleEnum::ADMIN);
    }
}
