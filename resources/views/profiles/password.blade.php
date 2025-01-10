<x-head>

</x-head>

<x-header>

</x-header>

@vite('resources/css/app.css')

<div class="container mx-auto p-4 pt-6 bg-gray-200 dark:bg-gray-800 rounded-lg shadow-md">
    <h1 class="text-3xl font-bold mb-4 text-center"><i class="bi bi-lock"> </i>Password</h1>

    <div class="max-w-md mx-auto p-4 bg-white dark:bg-gray-800 rounded-lg shadow-md border border-gray-300">
        <form action="{{ route('student.password.update') }}" method="POST">
            @csrf
            @method('PATCH')

            <div class="mb-4">
                <label for="current_password" class="block text-gray-700 text-sm font-bold mb-2"><i class="bi bi-lock"> </i>Current Password</label>
                <input type="password" name="current_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                @error('current_password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2"><i class="bi bi-key"> </i>New Password</label>
                <input type="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="block text-gray-700 text-sm font-bold mb-2"> <i class="bi bi-key"> </i>Confirm New Password</label>
                <input type="password" name="password_confirmation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                @error('password_confirmation')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><i class="bi bi-check2"> </i>Update Password</button>
        </form>
    </div>
</div>

<x-footer>

</x-footer>
