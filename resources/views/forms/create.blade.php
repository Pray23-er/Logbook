<x-layout>
    <h2 class="text-2xl font-bold mb-4">Add a student to your company</h2>

    <form action="/forms" method="POST" class="max-w-md mx-auto">
        @csrf

        <div class="mb-4">
            <label for="firstname" class="block text-sm font-medium text-gray-700">First Name</label>
            <input type="text" name="firstname" id="firstname" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 @error('firstname') border-red-500 @enderror">
            @error('firstname')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="lastname" class="block text-sm font-medium text-gray-700">Last Name</label>
            <input type="text" name="lastname" id="lastname" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 @error('lastname') border-red-500 @enderror">
            @error('lastname')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="matric_number" class="block text-sm font-medium text-gray-700">Matric Number</label>
            <input type="text" name="matric_number" id="matric_number" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 @error('matric_number') border-red-500 @enderror">
            @error('matric_number')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="school_name" class="block text-sm font-medium text-gray-700">School Name</label>
            <input type="text" name="school_name" id="school_name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 @error('school_name') border-red-500 @enderror">
            @error('school_name')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="phone_number" class="block text-sm font-medium text-gray-700">Phone Number</label>
            <input type="text" name="phone_number" id="phone_number" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 @error('phone_number') border-red-500 @enderror">
            @error('phone_number')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
            <input type="text" name="address" id="address" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 @error('address') border-red-500 @enderror">
            @error('address')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">Submit</button>
    </form>

    <a href="{{ route('company.dashboard') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded">Back to Dashboard</a>
</x-layout>
