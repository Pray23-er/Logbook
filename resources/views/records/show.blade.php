<x-head>

</x-head>

<x-header>

</x-header>

@vite('resources/css/app.css')

<div class="container mx-auto p-4 pt-6 bg-gray-200 dark:bg-gray-800 rounded-lg shadow-md">
    <h1 class="text-3xl font-bold mb-4 text-center"><i class="bi bi-journal"></i> Display Record</h1>

    <div class="max-w-4xl mx-auto p-4  rounded-lg shadow-md border border-gray-300">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        <i class="bi bi-card-text"></i> Title
                    </th>

                    <th scope="col" class="px-6 py-3">
                        <i class="bi bi-chat-left-text"></i> Description
                    </th>

                    <th scope="col" class="px-6 py-3">
                        <i class="bi bi-calendar"></i> Created on
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <i class="bi bi-gear"></i> Actions
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <i class="bi bi-pen"></i> Edited
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <i class="bi bi-check2-circle"></i> Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <i class="bi bi-chat-text"></i> Feedback
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <i class="bi bi-cloud-upload"></i> Uploads
                    </th>
                </tr>
            </thead>
            <tbody>

                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                    <td class="px-6 py-4">
                        {{ $logbook->title }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $logbook->description }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $logbook->created_at }}
                    </td>


                    <td>
                        <a href="{{ route('records.edit',  $logbook->id) }}" class="inline-block">
                            <button type="button" class="bg-green-700 hover:bg-green-800 text-white font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700">
                                <i class="bi bi-pencil"></i> EDIT
                            </button>
                        </a>

                        <form action="{{ route('records.destroy',  $logbook->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-700 hover:bg-red-800 text-white font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700">
                                <i class="bi bi-trash"></i> DELETE
                            </button>
                        </form>
                    </td>

                    <td class="px-6 py-4">
                        {{ $logbook->updated_at }}
                    </td>
                    <td class="px-6 py-4">
                        @if($logbook->status == 'pending')
                            <span class="bg-yellow-200 text-yellow-600 py-1 px-2 rounded"><i class="bi bi-hourglass"></i> Pending</span>
                        @elseif($logbook->status == 'approved')
                            <span class="bg-green-200 text-green-600 py-1 px-2 rounded"><i class="bi bi-check2-circle"></i> Approved</span>
                        @elseif($logbook->status == 'rejected')
                            <span class="bg-red-200 text-red-600 py-1 px-2 rounded"><i class="bi bi-x-circle"></i> Rejected</span>
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        @if($logbook->status == 'rejected')
                            {{ $logbook->feedback }}
                        @else
                            -
                        @endif
                    </td>


                    <td class="px-6 py-4">
                        @if($logbook->thumbnail)
                            @if(pathinfo($logbook->thumbnail, PATHINFO_EXTENSION) == 'jpg' ||
                                pathinfo($logbook->thumbnail, PATHINFO_EXTENSION) == 'jpeg' ||
                                pathinfo($logbook->thumbnail, PATHINFO_EXTENSION) == 'png' ||
                                pathinfo($logbook->thumbnail, PATHINFO_EXTENSION) == 'gif' ||
                                pathinfo($logbook->thumbnail, PATHINFO_EXTENSION) == 'svg')
                                <img src="{{ $logbook->thumbnail }}" alt="Thumbnail" style="max-width: 100px; max-height: 100px;">
                            @else
                                @if(pathinfo($logbook->thumbnail, PATHINFO_EXTENSION) == 'pdf')
                                    <a href="{{ $logbook->thumbnail }}" target="_blank">
                                        <i class="fas fa-file-pdf"></i> View PDF
                                    </a>
                                @elseif(pathinfo($logbook->thumbnail, PATHINFO_EXTENSION) == 'docx' || pathinfo($logbook->thumbnail, PATHINFO_EXTENSION) == 'doc')
                                    <a href="{{ $logbook->thumbnail }}" target="_blank">
                                        <i class="fas fa-file-word"></i> View Word Document
                                    </a>
                                @elseif(pathinfo($logbook->thumbnail, PATHINFO_EXTENSION) == 'pptx' || pathinfo($logbook->thumbnail, PATHINFO_EXTENSION) == 'ppt')
                                    <a href="{{ $logbook->thumbnail }}" target="_blank">
                                        <i class="fas fa-file-powerpoint"></i> View PowerPoint Presentation
                                    </a>
                                @elseif(pathinfo($logbook->thumbnail, PATHINFO_EXTENSION) == 'xlsx' || pathinfo($logbook->thumbnail, PATHINFO_EXTENSION) == 'xls')
                                    <a href="{{ $logbook->thumbnail }}" target="_blank">
                                        <i class="fas fa-file-excel"></i> View Excel Spreadsheet
                                    </a>
                                @else
                                    <a href="{{ $logbook->thumbnail }}" target="_blank">
                                        <i class="fas fa-file"></i> View File
                                    </a>
                                @endif
                            @endif
                        @else
                            <i class="fas fa-times"></i> No thumbnail
                        @endif
                    </td>


                </tr>
            </tbody>
        </table>
    </div>
</div>

    <div class="mb-5 max-w-2xl mx-auto p-4">
        <a href="{{ route('records.index') }}"><button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><i class="bi bi-house-door"></i> Home</button></a>
    </div>

<x-footer>

</x-footer>
