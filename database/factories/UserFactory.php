<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => 'harun',
            'email' => 'aegistar1804@gmail.com',
            'password' => Hash::make('harun123'), // password
            'remember_token' => Str::random(10),
        ];
    }
}
