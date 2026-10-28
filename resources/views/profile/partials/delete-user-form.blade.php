<section>

    <h2 class="mb-3"> Delete Account</h2>
    <p class="text-muted mb-4"> This action cannot be undone.</p>

    <form method="POST" action="{{ route('profile.destroy') }}">
        @csrf
        @method('DELETE')
        <div class="mb-3">
            <label>Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <button class="btn btn-danger"> Delete Account </button>
    </form>

</section>