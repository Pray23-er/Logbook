<x-head>

</x-head>

<x-header>

</x-header>

@vite('resources/css/app.css')

<div class="container mx-auto p-4 pt-6">
    <div class="hero mb-6">
        <h1 class="text-3xl font-bold mb-2 text-center"><i class="bi bi-calendar"></i> Add new record for today {{ date('d-m-Y') }}</h1>
    </div>

    <div class="max-w-2xl mx-auto p-4 bg-slate-200 dark:bg-slate-900 rounded-lg shadow-md border border-gray-300">
        <form method="POST" action="{{ route('records.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="mb-5">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"><i class="bi bi-card-text"></i> Title</label>
                <input type="text" id="title" class="@error('title') border-red-500 @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="title" placeholder="Enter title">
                @error('title')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-5">
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"><i class="bi bi-chat-left-text"></i> Description</label>
                <textarea id="description" rows="4" class="@error('description') border-red-500 @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Description of work done..." name="description"></textarea>
                @error('description')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-5">
                <label for="thumbnail" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"><i class="bi bi-image"></i> Thumbnail</label>
                <input type="file" id="thumbnail" class="@error('thumbnail') border-red-500 @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="thumbnail">
                @error('thumbnail')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-5">
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><i class="bi bi-check2"></i> Submit</button>
            </div>
        </form>
    </div>

    <div class="mb-5 max-w-2xl mx-auto p-4">
        <a href="{{ route('student.dashboard') }}">
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><i class="bi bi-house-door"></i> Home</button>
        </a>
    </div>
</div>
<x-footer>

</x-footer>
