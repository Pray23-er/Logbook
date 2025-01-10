<x-head>

</x-head>

<x-header>


</x-header>

@vite('resources/css/app.css')

<div class="mb-4">

</div>

<div class="container mx-auto p-4 pt-6 bg-gray-200 dark:bg-gray-800 rounded-lg shadow-md">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    <i class="bi bi-card-text"></i> Title
                </th>

                <th scope="col" class="px-6 py-3">
                    <i class="bi bi-gear"></i> Actions
                </th>
                <th scope="col" class="px-6 py-3">
                    <i class="bi bi-check2-circle"></i> Status
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($logbooks as $logbook)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-6 py-4">
                        {{ $logbook->title }}
                    </td>

                    <td>
                        <div class="flex justify-between">
                            <a href="{{ route('records.show', $logbook->id) }}">
                                <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                    <i class="bi bi-eye"></i> View
                                </button>
                            </a>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        {{ $logbook->status }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="mb-10  mt-5 ml-20">
    <a href="{{ route('student.dashboard') }}">
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
            <i class="bi bi-arrow-left-circle"></i> Back to Dashboard
        </button>
    </a>
</div>
<x-footer>

</x-footer>
