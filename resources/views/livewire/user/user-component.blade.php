<div>

    <div class="row">
        <div class="col-md-6">

            <form class="forrm-group" wire:submit="createUser">

                <input type="text" wire:model="name" placeholder="Name" class="form-control mb-2">
                <div>
                    @error('name')
                        {{ $message }}
                    @enderror
                </div>

                <input type="email" wire:model="email" placeholder="Email" class="form-control mb-2">
                <div>
                    @error('email')
                        {{ $message }}
                    @enderror
                </div>

                <input type="password" wire:model="password" placeholder="Password" class="form-control mb-2"
                    autocomplete="current-password">
                <div>
                    @error('password')
                        {{ $message }}
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Create User</button>
            </form>

        </div>
        <div class="col-md-6">
            <ul class="list-disc pl-6">
                @foreach ($users as $user)
                    <li class="gap-1">
                        {{ $user->id }} | {{ $user->email }} | {{ $user->name }} |
                        <a class="text-red-500 hover:text-red-700" wire:click="deleteUser({{ $user->id }})"
                            wire:confirm="Really?">Delete</a>
                    </li>
                @endforeach
            </ul>

        </div>
    </div>
</div>
