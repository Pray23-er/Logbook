<x-layout>
    <div class="min-h-screen bg-gradient-to-b from-slate-50 to-slate-100 dark:from-slate-900 dark:to-slate-800 py-16">
        <div class="max-w-md mx-auto px-4 sm:px-6">
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-slate-800 dark:text-white">Student Login</h1>
                <p class="mt-2 text-slate-600 dark:text-slate-400">Welcome back! Please enter your details.</p>
            </div>

            <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-lg p-8 border border-slate-200 dark:border-slate-700">
                <form method="POST" action="{{ route('student_login.store') }}" class="space-y-6">
                    @csrf

                    <div class="space-y-2">
                        <label for="matric_number" class="block text-sm font-medium text-slate-700 dark:text-slate-200">
                            Matric Number
                        </label>
                        <input
                            type="text"
                            id="matric_number"
                            name="matric_number"
                            class="w-full px-4 py-2 rounded-lg border border-slate-300 dark:border-slate-600
                                   focus:ring-2 focus:ring-blue-500 focus:border-transparent
                                   dark:bg-slate-700 dark:text-white placeholder-slate-400
                                   @error('matric_number') border-red-500 @enderror"
                            placeholder="Enter your matric number"
                        >
                        @error('matric_number')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="space-y-2">
                        <label for="password" class="block text-sm font-medium text-slate-700 dark:text-slate-200">
                            Password
                        </label>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            class="w-full px-4 py-2 rounded-lg border border-slate-300 dark:border-slate-600
                                   focus:ring-2 focus:ring-blue-500 focus:border-transparent
                                   dark:bg-slate-700 dark:text-white placeholder-slate-400
                                   @error('password') border-red-500 @enderror"
                            placeholder="Enter your password"
                        >
                        @error('password')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input
                                type="checkbox"
                                id="remember-me"
                                name="remember"
                                class="w-4 h-4 rounded border-slate-300 text-blue-600
                                       focus:ring-blue-500 dark:border-slate-600 dark:bg-slate-700"
                            >
                            <label for="remember-me" class="ml-2 text-sm text-slate-600 dark:text-slate-400">
                                Remember me
                            </label>
                        </div>

                        <a href="#" class="text-sm font-medium text-blue-600 hover:text-blue-500 dark:text-blue-400">
                            Forgot password?
                        </a>
                    </div>

                    <button
                        type="submit"
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2.5 px-4 rounded-lg
                               transform transition-all duration-150 ease-in-out
                               focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2
                               active:scale-95 dark:focus:ring-offset-slate-800"
                    >
                        Sign in
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
