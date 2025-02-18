<x-head></x-head>
<x-header></x-header>



<div class="container mx-auto p-4 pt-6">
    <h1 class="text-3xl font-bold mb-4 text-center text-indigo-900 dark:text-indigo-400"><i class="bi bi-lock me-2"></i> Change Password</h1>

    <div class="card max-w-md mx-auto bg-white dark:bg-gray-700 rounded-3xl shadow-lg p-6">
        <div class="card-body">
            <form action="{{ route('company.password.update') }}" method="POST">
                @csrf
                @method('PATCH')

                <div class="mb-4">
                    <label for="current_password" class="block text-sm font-medium text-gray-700 dark:text-gray-300"><i class="bi bi-lock me-2"></i> Current Password</label>
                    <input type="password" name="current_password" id="current_password" class="form-control mt-1 @error('current_password') is-invalid @enderror"  aria-describedby="current_passwordHelp" >
                    @error('current_password')
                        <div id="current_passwordHelp" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300"><i class="bi bi-key me-2"></i> New Password</label>
                    <input type="password" name="password" id="password" class="form-control mt-1 @error('password') is-invalid @enderror" aria-describedby="passwordHelp">
                    @error('password')
                        <div id="passwordHelp" class="invalid-feedback">
                           {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700 dark:text-gray-300"><i class="bi bi-key me-2"></i> Confirm New Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control mt-1 @error('password_confirmation') is-invalid @enderror" aria-describedby="passwordConfirmationHelp">
                    @error('password_confirmation')
                        <div id="passwordConfirmationHelp" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary rounded-lg transition duration-300"><i class="bi bi-check2 me-2"></i> Update Password</button>
                </div>
            </form>
        </div>
    </div>

    <div class="mt-4 text-center">
        <a href="{{ route('company.dashboard') }}" class="btn btn-secondary rounded-lg transition duration-300">
            <i class="bi bi-arrow-left-circle me-2"></i> Back to Dashboard
        </a>
    </div>
</div>

<x-footer></x-footer>
