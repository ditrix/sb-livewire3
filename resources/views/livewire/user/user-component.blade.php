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
