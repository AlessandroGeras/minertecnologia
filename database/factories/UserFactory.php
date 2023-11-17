<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {      

        return [
            'name' => 'minertecnologia',
            'email' => 'minertecnologia@minertecnologia.com.br',
            'password' => Hash::make('minertecnologia'),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (User $user) {
            $adminRole = Role::firstOrCreate(['name' => 'admin', 'guard_name' => 'web']);
            $productsRole = Role::firstOrCreate(['name' => 'products', 'guard_name' => 'web']);
            $categoryRole = Role::firstOrCreate(['name' => 'category', 'guard_name' => 'web']);
            $marksRole = Role::firstOrCreate(['name' => 'marks', 'guard_name' => 'web']);
            
            $user->assignRole($adminRole);
        });
    }

}