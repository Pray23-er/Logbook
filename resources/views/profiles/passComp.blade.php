<x-head>

</x-head>

<x-header>

</x-header>

@vite('resources/css/app.css')

<div class="container mx-auto p-4 pt-6 bg-gray-200 dark:bg-gray-800 rounded-lg shadow-md">
    <h1 class="text-3xl font-bold mb-4 text-center"><i class="bi bi-lock"></i> Change Password</h1>

    <div class="max-w-md mx-auto bg-white dark:bg-gray-700 rounded-lg shadow-md p-4">
        <form action="{{ route('company.password.update') }}" method="POST">
            @csrf
            @method('PATCH')

            <div class="mb-4">
                <label for="current_password" class="block text-sm font-medium text-gray-700 dark:text-gray-300"><i class="bi bi-lock"></i> Current Password</label>
                <input type="password" name="current_password" class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 dark:bg-gray-700 dark:text-gray-300 @error('current_password') border-red-500 @enderror">
                @error('current_password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300"><i class="bi bi-key"></i> New Password</label>
                <input type="password" name="password" class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 dark:bg-gray-700 dark:text-gray-300 @error('password') border-red-500 @enderror">
                @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700 dark:text-gray-300"><i class="bi bi-key"></i> Confirm New Password</label>
                <input type="password" name="password_confirmation" class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 dark:bg-gray-700 dark:text-gray-300 @error('password_confirmation') border-red-500 @enderror">
                @error('password_confirmation')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex justify-center">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"><i class="bi bi-check2"></i> Update Password</button>
            </div>
        </form>
    </div>

    <br>

    <div class="mb-10">
        <div class="flex justify-center">
            <a href="{{ route('company.dashboard') }}"><button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><i class="bi bi-arrow-left-circle"></i> Back to Dashboard</button></a>
        </div>
    </div>
</div>

<x-footer>

</x-footer>
