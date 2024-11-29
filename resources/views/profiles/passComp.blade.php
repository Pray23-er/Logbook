<!-- profiles/password.blade.php -->

<x-layout>
    <h1 class="text-2xl font-bold mb-4">Change Password</h1>

    <form action="{{ route('company.password.update') }}" method="POST">
        @csrf
        @method('PATCH')

        <div class="mb-4">
            <label for="current_password" class="block text-gray-700 text-sm font-bold mb-2">Current Password</label>
            <input type="password" name="current_password" class="shadow appearance-none border rounded w-1/2 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('current_password')
            <span class="text-red-500 text-xs italic">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="password" class="block text-gray-700 text-sm font-bold mb-2">New Password</label>
            <input type="password" name="password" class="shadow appearance-none border rounded w-1/2 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('password')
            <span class="text-red-500 text-xs italic">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="password_confirmation" class="block text-gray-700 text-sm font-bold mb-2">Confirm New Password</label>
            <input type="password" name="password_confirmation" class="shadow appearance-none border rounded w-1/2 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('password_confirmation')
            <span class="text-red-500 text-xs italic">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Update Password</button>
    </form>
<br>
    <div class="mb-10">
        <a href="{{ route('company.dashboard') }}"><button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Back to Dashboard</button></a>
        </div>
</x-layout>
