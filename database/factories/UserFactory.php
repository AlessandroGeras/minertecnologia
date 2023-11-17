<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {      

        return [
            'name' => 'minertecnologia',
            'email' => 'minertecnologia@minertecnologia.com.br',
            'password' => bcrypt('minertecnologia')
        ];
    }
}