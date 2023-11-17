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
            $productsRole = Role::firstOrCreate(['name' => 'produtos', 'guard_name' => 'web']);
            $categoryRole = Role::firstOrCreate(['name' => 'categorias', 'guard_name' => 'web']);
            $brandsRole = Role::firstOrCreate(['name' => 'marcas', 'guard_name' => 'web']);
            
            $user->assignRole($adminRole);
        });
    }

}