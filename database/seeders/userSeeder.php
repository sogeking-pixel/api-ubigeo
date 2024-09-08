<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::make([
            'name'=> "yerson el pro",
            'email'=>"email",
            'password'=>Hash::make("7501588519250811")
        ]);

        $user->assignRole('admin');
    }
}