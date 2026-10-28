<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>
    <form method="post" action="{{ route('profile.update') }}">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label>Name</label>
            <input type="text" class="form-control" name="name" value="{{ old('name', auth()->user()->name) }}" required>
            @error('name')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-4">
            <label>Email</label>
            <input type="email" class="form-control" name="email" value="{{ old('email', auth()->user()->email) }}" required>
            @error('email')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <button class="btn btn-success"> Save Changes </button>
    </form>
</section>