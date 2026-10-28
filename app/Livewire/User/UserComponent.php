<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;

// используюься либо валидаторы типа Requestoв ли атрибуты

class UserComponent extends Component
{
    public function deleteUser($userId)
    {
        $user = User::find($userId);

        if ($user) {
            $user->delete();
        }
    }

    #[On('user-created')]
    public function updateUserList()
    {
        return true;
    }

    public function render()
    {
        $users = User::all();

        return view('livewire.user.user-component', [

            'users' => $users,
        ]);
    }
}
