<?php

namespace App\Livewire\User;

use Livewire\Component;

class UserComponent extends Component
{
    public $name = 'Anonimus';

    public $full_name;

    public function mount()
    {
        $this->full_name = 'Mr. '.$this->name.' Jr.';
    }

    public array $users = [
        'User1',
        'User2',
        'User3',
    ];

    public $user;

    public function add()
    {
        $this->users[] = $this->user;
    }

    public function render()
    {

        return view('livewire.user.user-component', [
            'name' => $this->name,
            'email' => 'john.@gmail.com',
            'full_name' => $this->full_name,
            'users' => $this->users,
            'user' => $this->user,
        ])->with('prefix', 'Mr.');
    }
}
