<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Form;

class UserForm extends Form
{
    // #[Validate('required|string|max:255|min:3')]
    public string $name = '';

    // #[Validate('required|email|unique:users,email')]
    public string $email = '';

    // #[Validate('required|string|min:6')]
    public string $password = '';

    public int $country_id = 0;

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255|min:3',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
            'country_id' => 'required|exists:countries,id',
        ];
    }

    public function create()
    {

        $this->validate();

        User::create($this->all());

        $this->reset();
    }
}
