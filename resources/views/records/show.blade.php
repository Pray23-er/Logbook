<x-head></x-head>
<x-header></x-header>


<div class="container mx-auto p-4 pt-6">
    <h1 class="text-3xl font-bold mb-4 text-center text-sky-700 dark:text-sky-400"><i class="bi bi-journal me-2"></i> Display Record</h1>
    <hr class="my-4 border-gray-300 dark:border-gray-600">
    <div class="card bg-white dark:bg-gray-800 rounded-3xl shadow-lg border border-gray-200 dark:border-gray-700 overflow-x-auto">
        <div class="card-body p-6">
            <table class="table table-borderless table-hover table-striped w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 align-middle">
                <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 font-medium"><i class="bi bi-card-text me-2"></i> Title</th>
                        <th scope="col" class="px-6 py-3 font-medium"><i class="bi bi-chat-left-text me-2"></i> Description</th>
                        <th scope="col" class="px-6 py-3 font-medium"><i class="bi bi-calendar me-2"></i> Created On</th>
                        <th scope="col" class="px-6 py-3 font-medium text-center"><i class="bi bi-gear me-2"></i> Actions</th>
                        <th scope="col" class="px-6 py-3 font-medium"><i class="bi bi-pen me-2"></i> Edited</th>
                        <th scope="col" class="px-6 py-3 font-medium text-center"><i class="bi bi-check2-circle me-2"></i> Status</th>
                        <th scope="col" class="px-6 py-3 font-medium"><i class="bi bi-chat-text me-2"></i> Feedback</th>
                        <th scope="col" class="px-6 py-3 font-medium"><i class="bi bi-cloud-upload me-2"></i> Uploads</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-700 transition duration-300">
                        <td class="px-6 py-4 align-middle">{{ $logbook->title }}</td>
                        <td class="px-6 py-4 align-middle">{{ $logbook->description }}</td>
                        <td class="px-6 py-4 align-middle">{{ $logbook->created_at }}</td>
                        <td class="px-6 py-4 text-center align-middle">
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('records.edit', $logbook->id) }}" class="btn btn-sm btn-primary me-2 rounded-lg transition duration-300" title="Edit">
                                    <i class="bi bi-pencil"></i> Edit
                                </a>
                                <form action="{{ route('records.destroy', $logbook->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger rounded-lg transition duration-300" onclick="return confirm('Are you sure you want to delete this record?')" title="Delete">
                                        <i class="bi bi-trash"></i> Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                        <td class="px-6 py-4 align-middle">{{ $logbook->updated_at }}</td>
                        <td class="px-6 py-4 text-center align-middle">
                            @if($logbook->status == 'pending')
                                <span class="badge rounded-pill bg-warning bg-opacity-75 text-white py-2 px-3"><i class="bi bi-hourglass me-1"></i> Pending</span>
                            @elseif($logbook->status == 'approved')
                                <span class="badge rounded-pill bg-success bg-opacity-75 text-white py-2 px-3"><i class="bi bi-check2-circle me-1"></i> Approved</span>
                            @elseif($logbook->status == 'rejected')
                                <span class="badge rounded-pill bg-danger bg-opacity-75 text-white py-2 px-3"><i class="bi bi-x-circle me-1"></i> Rejected</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 align-middle">
                            @if($logbook->status == 'rejected')
                                {{ $logbook->feedback }}
                            @else
                                -
                            @endif
                        </td>
                        <td class="px-6 py-4 align-middle">
                            @if($logbook->thumbnail)
                                @if(in_array(pathinfo($logbook->thumbnail, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'gif', 'svg']))
                                    <img src="{{ $logbook->thumbnail }}" alt="Thumbnail" class="img-thumbnail" style="max-width: 100px; max-height: 100px;">
                                @elseif(in_array(pathinfo($logbook->thumbnail, PATHINFO_EXTENSION), ['pdf', 'docx', 'doc', 'pptx', 'ppt', 'xlsx', 'xls']))
                                    <a href="{{ $logbook->thumbnail }}" target="_blank" class="btn btn-sm btn-outline-secondary">
                                        <i class="fas fa-file me-1"></i> View {{ strtoupper(pathinfo($logbook->thumbnail, PATHINFO_EXTENSION)) }}
                                    </a>
                                @else
                                    <a href="{{ $logbook->thumbnail }}" target="_blank" class="btn btn-sm btn-outline-secondary">
                                        <i class="fas fa-file me-1"></i> View File
                                    </a>
                                @endif
                            @else
                                <span class="text-muted"><i class="fas fa-times me-1"></i> No thumbnail</span>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-5 text-center">
        <a href="{{ route('records.index') }}" class="btn btn-secondary rounded-lg transition duration-300 py-2 px-4">
            <i class="bi bi-house-door me-2"></i> Home
        </a>
    </div>
</div>

<x-footer></x-footer>
