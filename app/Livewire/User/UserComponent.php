<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Component;

// используюься либо валидаторы типа Requestoв ли атрибуты

class UserComponent extends Component
{
    #[Validate('required|string|max:255')]
    public string $name = '';

    #[Validate('required|email|unique:users,email')]
    public string $email = '';

    #[Validate('required|string|min:6')]
    public string $password = '';

    public function mount() {}

    public function createUser()
    {
        // стиль неквестов
        $validated = $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        //  User::create($validated);  // стиль реквестов

        // стиль атрибутов
        User::create($this->all());

        session()->flash('status', 'User successfully created.');

        // clear the form fields after successful creation
        $this->reset('name', 'email', 'password');
    }

    public function deleteUser($userId)
    {
        $user = User::find($userId);

        if ($user) {
            $user->delete();
        }
    }

    public function render()
    {
        $users = User::all();
        //        dd($users);

        return view('livewire.user.user-component', [

            'users' => $users,
        ]);
    }
}
