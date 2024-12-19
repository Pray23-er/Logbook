<x-layout>
    <div class="min-h-screen bg-slate-50 dark:bg-gray-900 py-12 px-4 sm:px-6">
        <div class="max-w-2xl mx-auto">
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-slate-800 dark:text-white">Register your Account</h1>
                <p class="mt-2 text-slate-600 dark:text-slate-400">Create a new account to get started</p>
            </div>

            <div class="bg-white dark:bg-slate-800 shadow-sm rounded-xl p-8 border border-slate-200 dark:border-slate-700">
                <form method="POST" action="{{ route('register.store') }}" class="space-y-6">
                    @csrf

                    <!-- Name Field -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-slate-700 dark:text-slate-200">
                            Name
                        </label>
                        <input
                            type="text"
                            id="name"
                            name="name"
                            class="mt-1 block w-full px-4 py-2 rounded-lg border @error('name') border-red-500 @else border-slate-300 dark:border-slate-600 @enderror bg-white dark:bg-slate-700 text-slate-900 dark:text-slate-100 focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            placeholder="Enter your full name"
                        >
                        @error('name')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email Field -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-slate-700 dark:text-slate-200">
                            Email
                        </label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            class="mt-1 block w-full px-4 py-2 rounded-lg border @error('email') border-red-500 @else border-slate-300 dark:border-slate-600 @enderror bg-white dark:bg-slate-700 text-slate-900 dark:text-slate-100 focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            placeholder="Enter your email address"
                        >
                        @error('email')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password Field -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-slate-700 dark:text-slate-200">
                            Password
                        </label>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            class="mt-1 block w-full px-4 py-2 rounded-lg border @error('password') border-red-500 @else border-slate-300 dark:border-slate-600 @enderror bg-white dark:bg-slate-700 text-slate-900 dark:text-slate-100 focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            placeholder="Create a strong password"
                        >
                        @error('password')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password Confirmation Field -->
                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-slate-700 dark:text-slate-200">
                            Confirm Password
                        </label>
                        <input
                            type="password"
                            id="password_confirmation"
                            name="password_confirmation"
                            class="mt-1 block w-full px-4 py-2 rounded-lg border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-700 text-slate-900 dark:text-slate-100 focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            placeholder="Confirm your password"
                        >
                    </div>

                    <!-- Account Type Selection -->
                    <div>
                        <label for="type" class="block text-sm font-medium text-slate-700 dark:text-slate-200">
                            Account Type
                        </label>
                        <select
                            id="type"
                            name="type"
                            class="mt-1 block w-full px-4 py-2 rounded-lg border @error('type') border-red-500 @else border-slate-300 dark:border-slate-600 @enderror bg-white dark:bg-slate-700 text-slate-900 dark:text-slate-100 focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        >
                            <option value="">Select account type</option>
                            <option value="school">School</option>
                            <option value="company">Company</option>
                        </select>
                        @error('type')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-4">
                        <button
                            type="submit"
                            class="w-full px-4 py-3 text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 rounded-lg transition-colors duration-150 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:focus:ring-offset-slate-800"
                        >
                            Create Account
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
