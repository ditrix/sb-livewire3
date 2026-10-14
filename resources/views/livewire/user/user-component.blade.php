<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    Name: <input type="text" wire:model.live="name">
    Email: <input type="text" wire:model.live="email">
    {{-- NB!: wire:model.live is a new feature in Livewire 3. It allows you to bind data to your component without the need for a form submission. This means that as you type in the input fields, the data is automatically updated in the component's state. --}}
    <br>
    {{ $prefix }}
    <br>
    Name: {{ $name }}
    <br>
    Email: {{ $email }}
    <br>
    Full Name: {{ $full_name }}
    <hr>
    <label>Add User</label>
    <input type="text" wire:model.live="user">
    <button class="btn btn-primary" wire:click="add">Add user</button>
    <ul>
        @foreach ($users as $user)
            <li>
                {{ $user }}
            </li>
        @endforeach
    </ul>
    <hr>
</div>
