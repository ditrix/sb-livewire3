<?php

namespace App\Livewire\User;

use App\Livewire\Forms\UserForm;
use Livewire\Component;

class CreateUser extends Component
{
    public UserForm $form;

    public function createUser()
    {

        $this->form->create();

        $this->dispatch('user-created');

        session()->flash('success', 'User successfully created.');
    }

    public function render()
    {
        return view('livewire.user.create-user');
    }
}
