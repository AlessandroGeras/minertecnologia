<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactStoreRequest;
use App\Http\Requests\ContactUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function register()
    {
        return view("users.create-user");
    }

    public function store(Request $request)
    {

        $userData = $request->all();
        $userData['password'] = Hash::make($userData['password']);

        $user = User::create($userData);

        $roles = (array)$request->input('roles'); // Certificar-se de que é um array
        foreach ($roles as $role) {
            $roleModel = Role::findByName($role, 'web');
            $user->assignRole($roleModel);
        }

        return redirect()->route('dashboard')->with('success', 'User created successfully!');
    }

    public function edit($id)
    {
        $user = User::query()->find($id);
        return view("users.edit-user", compact("user"));
    }

    public function update(Request $request, $id)
    {        

        $user = User::findOrFail($id);
        $roles = $request->input('roles') ?? [];
        
        $user->syncRoles([]);
        
        foreach ($roles as $roleName) {
            $role = Role::findByName($roleName, 'web');
            $user->assignRole($role);
        }

        return redirect()->route('dashboard')->with('success', 'User updated successfully!');
    }

    public function softDelete($id)
    {
        $contact = User::query()->find($id);
        $contact->delete();

        return back()->with('success', 'User deleted successfully!');
    }
}
