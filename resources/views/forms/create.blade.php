<x-head>

</x-head>

<x-header>


</x-header>

@vite('resources/css/app.css')
<h2 class="text-3xl font-bold mb-4 text-center">Add a Student to Your Company</h2>


<div class="max-w-md mx-auto bg-white dark:bg-gray-800 rounded-lg shadow-md p-4">
    <div class="bg-gray-100 dark:bg-gray-900 rounded-lg p-4">
        <form action="/forms" method="POST">
            @csrf

            <div class="mb-4">
                <label for="firstname" class="block text-sm font-medium text-gray-700 dark:text-gray-300">First Name</label>
                <input type="text" name="firstname" id="firstname" class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 dark:bg-gray-700 dark:text-gray-300 @error('firstname') border-red-500 @enderror">
                @error('firstname')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="lastname" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Last Name</label>
                <input type="text" name="lastname" id="lastname" class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 dark:bg-gray-700 dark:text-gray-300 @error('lastname') border-red-500 @enderror">
                @error('lastname')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="matric_number" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Matric Number</label>
                <input type="text" name="matric_number" id="matric_number" class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 dark:bg-gray-700 dark:text-gray-300 @error('matric_number') border-red-500 @enderror">
                @error('matric_number')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="school_name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">School Name</label>
                <input type="text" name="school_name" id="school_name" class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 dark:bg-gray-700 dark:text-gray-300 @error('school_name') border-red-500 @enderror">
                @error('school_name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="phone_number" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Phone Number</label>
                <input type="text" name="phone_number" id="phone_number" class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 dark:bg-gray-700 dark:text-gray-300 @error('phone_number') border-red-500 @enderror">
                @error('phone_number')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="address" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Address</label>
                <input type="text" name="address" id="address" class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 dark:bg-gray-700 dark:text-gray-300 @error('address') border-red-500 @enderror">
                @error('address')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @            @enderror
            </div>

            <div class="flex justify-center">
                <button type="submit" class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">Submit</button>
            </div>
        </form>
    </div>
    </div>
    <div class="flex justify-center mt-4 mb-2">
        <a href="{{ route('company.dashboard') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded">Back to Dashboard</a>
    </div>

    <x-footer>

    </x-footer>
