<x-layout>

    <h1 class="text-3xl font-bold mb-4">Company Profile</h1>

    <div class="max-w-md bg-white rounded-lg shadow-md p-4">
        <h2 class="text-xl font-bold mb-2">Company Information</h2>

        <div class="flex flex-col mb-4">
            <label class="text-gray-600 mb-2">Name:</label>
            <p class="text-gray-900">{{ $company->name }}</p>
        </div>

        <div class="flex flex-col mb-4">
            <label class="text-gray-600 mb-2">Email:</label>
            <p class="text-gray-900">{{ $company->email }}</p>
        </div>


    </div>

    <br>

    <div class="max-w-md bg-white rounded-lg shadow-md p-4">
        <h2 class="text-xl font-bold mb-2">Account Information</h2>

        <div class="flex flex-col mb-4">
            <label class="text-gray-600 mb-2">Account Created:</label>
            <p class="text-gray-900">{{ $company->created_at }}</p>
        </div>

        <div class="flex flex-col mb-4">
            <label class="text-gray-600 mb-2">Last Updated:</label>
            <p class="text-gray-900">{{ $company->updated_at }}</p>
        </div>
    </div>

    <br>

    <div class="mb-10">
        <a href="{{ route('company.dashboard') }}"><button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Back to Dashboard</button></a>
        </div>

</x-layout>
