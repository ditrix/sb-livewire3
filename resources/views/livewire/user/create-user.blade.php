        <div class="col-md-6">

            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <form wire:submit="createUser">

                <input type="text" wire:model="form.name" placeholder="Name"
                    class="form-control mt-2 @error('form.name') is-invalid @enderror" id="name">
                <div class="invalid-feedback" id="name">
                    @error('form.name')
                        {{ $message }}
                    @enderror
                </div>

                <input type="email" wire:model="form.email" placeholder="Email"
                    class="form-control mt-2 @error('form.email') is-invalid @enderror" id="email">
                <div class="invalid-feedback" id="email">
                    @error('form.email')
                        {{ $message }}
                    @enderror
                </div>


                <input type="password" wire:model="form.password" placeholder="Password"
                    class="form-control mt-2 @error('form.password') is-invalid @enderror" id="password"
                    autocomplete="current-password">
                <div class="invalid-feedback" id="password">
                    @error('form.password')
                        {{ $message }}
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary mt-3">Create User</button>
            </form>

        </div>
