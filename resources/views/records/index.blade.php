<x-head></x-head>
<x-header></x-header>

<style>
.bigger-icon {
    font-size: 1.2rem; /* Or adjust to your preferred size */
}

/* Add or override other styles here if needed */
.table thead tr { /* Example: Style table header */
    background-color: #f0f0f5;
}

.badge { /* Example:  Style the badges further */
    font-weight: 500;
}

/* ... more styles ... */
</style>

<div class="container mx-auto p-4 pt-6">
    <div class="card bg-white dark:bg-gray-800 rounded-3xl shadow-lg border border-gray-200 dark:border-gray-700 overflow-hidden">
        <div class="card-body p-6">
            <h2 class="text-3xl font-bold text-sky-700 dark:text-sky-400 mb-5 text-center"><i class="bi bi-journal-text me-2"></i> Logbook Entries</h2>
            <div class="table-responsive">
                <table class="table table-borderless table-hover table-striped w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 align-middle">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3 font-medium text-center"><i class="bi bi-card-text me-2"></i> Title</th>
                            <th scope="col" class="px-6 py-3 font-medium text-center"><i class="bi bi-gear me-2"></i> Actions</th>
                            <th scope="col" class="px-6 py-3 font-medium text-center"><i class="bi bi-check2-circle me-2"></i> Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($logbooks as $logbook)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-sky-50 dark:hover:bg-gray-700 transition duration-300">
                                <td class="px-6 py-4 align-middle text-center">{{ $logbook->title }}</td>
                                <td class="px-6 py-4 text-center align-middle">
                                    <div class="d-flex justify-content-center">
                                        <a href="{{ route('records.show', $logbook->id) }}" class="btn btn-sm btn-success me-2 rounded-lg transition duration-300" title="View">
                                            <i class="bi bi-eye bigger-icon"></i>
                                        </a>
                                        <a href="{{ route('records.edit', $logbook->id) }}" class="btn btn-sm btn-primary me-2 rounded-lg transition duration-300" title="Edit">
                                            <i class="bi bi-pencil-square bigger-icon"></i>
                                        </a>
                                        <form action="{{ route('records.destroy', $logbook->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger rounded-lg transition duration-300" onclick="return confirm('Are you sure you want to delete this record?')" title="Delete">
                                                <i class="bi bi-trash bigger-icon"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-center align-middle">
                                    @if ($logbook->status === 'approved')
                                        <span class="badge rounded-pill bg-success bg-opacity-75 text-white py-2 px-3">Approved</span>
                                    @elseif ($logbook->status === 'rejected')
                                        <span class="badge rounded-pill bg-danger bg-opacity-75 text-white py-2 px-3">Rejected</span>
                                    @else
                                        <span class="badge rounded-pill bg-warning bg-opacity-75 text-white py-2 px-3">Pending</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="mt-5 text-center">
        <a href="{{ route('student.dashboard') }}" class="btn btn-secondary rounded-lg transition duration-300 py-2 px-4">
            <i class="bi bi-arrow-left-circle me-2 bigger-icon"></i> Back to Dashboard
        </a>
    </div>
</div>

<x-footer></x-footer>
