<!DOCTYPE html>
<html lang="en">

<x-head>

</x-head>

<body class="contact-page">

    <x-header>

    </x-header>
    <div class="container d-flex justify-content-center my-5">
        <div class="card bg-light shadow-sm" style="width: 30rem;">
            <div class="card-body">
                <h2 class="text-center mb-4">Register your Account</h2>
                <p class="text-center text-muted mb-4">Create a new account to get started</p>

                <form method="POST" action="{{ route('register.store') }}">
                    @csrf
                    @method('post')
                    <!-- Name Field -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Enter your full name">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <p class="text-center text-green" style="font-size: 12px; color: green;">Required : Company or School name</p>

                    </div>

                    <!-- Email Field -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter your email address">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Password Field -->
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Create a strong password">
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <p class="text-center text-green" style="font-size: 12px; color: green;">Required : Minimum 8 characters, at least 1 uppercase letter, 1 lowercase letter, 1 number and 1 special character</p>
                    </div>

                    <!-- Password Confirmation Field -->
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm your password">
                    </div>

                    <!-- Account Type Selection -->
                    <div class="mb-3">
                        <label for="type" class="form-label">Account Type</label>
                        <select class="form-select @error('type') is-invalid @enderror" id="type" name="type">
                            <option value="">Select account type</option>
                            <option value="school">School</option>
                            <option value="company">Company</option>
                        </select>
                        @error('type')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary w-100">Create Account</button>
                </form>
            </div>
        </div>
    </div>

    <x-footer>

    </x-footer>
