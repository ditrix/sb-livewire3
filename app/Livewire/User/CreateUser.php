<?php

namespace App\Livewire\User;

use App\Livewire\Forms\UserForm;
use App\Models\Country;
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

        $countries = Country::all();

        return view('livewire.user.create-user', [
            'countries' => $countries,
        ]);
    }
}
