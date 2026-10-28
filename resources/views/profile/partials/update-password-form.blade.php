<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Current Password</label>
            <input type="password" class="form-control" name="current_password">
            @error('current_password','updatePassword')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label>New Password</label>
            <input type="password" class="form-control" name="password">
            @error('password','updatePassword')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-4">
            <label>Confirm Password</label>
            <input type="password" class="form-control" name="password_confirmation">
        </div>
        <button class="btn btn-success"> Save Password</button>
    </form>
</section>