<?php

namespace App\Livewire\User;

use App\Livewire\Forms\UserForm;
use App\Models\User;
use Livewire\Component;

// используюься либо валидаторы типа Requestoв ли атрибуты

class UserComponent extends Component
{
    public UserForm $form;

    public function mount() {}

    public function createUser()
    {

        $this->form->create();

        session()->flash('success', 'User successfully created.');
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

        return view('livewire.user.user-component', [

            'users' => $users,
        ]);
    }
}
