<div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li> {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session()->has('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <hr>
    <form class="row g-3" wire:submit.prevent='submit'>
        <div class="col-12">
            <label class="form-label">Email</label>
            <input type="text" class="form-control" value="{{ auth()->user()->email }}" wire:model.defer='email'
                required>
        </div>
        <div class="col-6">
            <label class="form-label">Username</label>
            <input type="text" name="username" class="form-control" value="{{ auth()->user()->username }}"
                wire:model.defer='username' required readonly>
        </div>
        <div class="col-6">
            <label class="form-label">Name</label>
            <input type="text" name="name"class="form-control" value="{{ auth()->user()->name }}"
                wire:model.defer='name' required>
        </div>
        <div class="text-start mt-3">
            <button type="submit" class="btn btn-primary px-4">Save Changes</button>
        </div>
    </form>
</div>
