<x-layout>
<h4>Create Records</h4>

<div class="max-w-2xl mx-auto p-4 bg-slate-200 dark:bg-slate-900 rounded-lg shadow-md">
    <form method="POST" action="{{ route('records.store') }}">
        @csrf

        <div class="mb-5">
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
            <input type="text" id="title" class="@error('title') border-red-500 @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="title">
            @error('title')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-5">
            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
            <textarea id="description" rows="4" class="@error('description') border-red-500 @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Description of work done..." name="description"></textarea>
            @error('description')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-5">
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Submit</button>
        </div>
    </form>
</div>

<div class="mb-5 max-w-2xl mx-auto p-4">
    <a href="{{ route('records.index') }}">
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Home</button>
    </a>
</div>

</x-layout>


