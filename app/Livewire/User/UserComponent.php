<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;

class UserComponent extends Component
{
    public string $name = '';

    public string $email = '';

    public string $password = '';

    public function mount() {}

    public function createUser()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);

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
