<x-head></x-head>

<x-header></x-header>



<div class="min-h-screen bg-gradient-to-b from-sky-50 to-sky-100 dark:from-slate-900 dark:to-slate-800 px-4 py-16">
    <div class="max-w-7xl mx-auto">
        <div class="d-flex align-items-center justify-content-center mb-12">
            <div class="d-flex align-items-center">
                <img src="{{ asset('images/students/'.$student->image) }}"
                alt="Student Image"
                class="rounded-circle object-cover me-3"
                style="width: 70px; height: 70px;">
                <div>
                    <h2 class="text-sky-600 dark:text-sky-400 fw-bold">{{ $student->firstname }} {{ $student->lastname }}</h2>
                    <p class="text-muted small mb-0">Welcome Back!</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="card bg-white dark:bg-gray-800 rounded-lg shadow-md p-4 mb-4 d-flex flex-column h-100">  <h5 class="card-title fw-bold text-sky-800 dark:text-white mb-3">Navigation</h5>
                    <ul class="list-unstyled flex-grow-1">
                        <li class="mb-2">  <a href="{{ route('student.dashboard') }}" class="nav-link text-sky-600 dark:text-sky-400 hover:text-sky-800 dark:hover:text-sky-200"><i class="bi bi-speedometer2 me-2"></i> Dashboard</a>
                        </li>
                        @if($companyFormFilled && $companyFormApproved)
                            <li class="mb-2">  <a href="{{ route('records.index') }}" class="nav-link text-sky-600 dark:text-sky-400 hover:text-sky-800 dark:hover:text-sky-200"><i class="bi bi-journal me-2"></i> View Logbook Entries</a>
                            </li>
                            <li class="mb-2">  <a href="{{ route('records.create') }}" class="nav-link text-sky-600 dark:text-sky-400 hover:text-sky-800 dark:hover:text-sky-200"><i class="bi bi-plus-lg me-2"></i> Add New Entry</a>
                            </li>
                        @else
                            <li class="mb-2">  <a href="{{ route('companyform.store') }}" class="nav-link text-sky-600 dark:text-sky-400 hover:text-sky-800 dark:hover:text-sky-200"><i class="bi bi-file-earmark me-2"></i> Fill Company Form</a>
                            </li>
                        @endif
                        <li class="mb-2">  <a href="{{ route('profiles.student') }}" class="nav-link text-sky-600 dark:text-sky-400 hover:text-sky-800 dark:hover:text-sky-200"><i class="bi bi-person-circle me-2"></i> Profile</a>
                        </li>
                        <li class="mb-2">  <a href="{{ route('student.password.edit') }}" class="nav-link text-sky-600 dark:text-sky-400 hover:text-sky-800 dark:hover:text-sky-200"><i class="bi bi-lock me-2"></i> Change Password</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-9">
                <div class="card bg-white dark:bg-gray-800 rounded-lg shadow-md p-4 mb-4">
                    <h5 class="card-title fw-bold text-sky-800 dark:text-white mb-3">Quick Overview</h5>
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card bg-sky-100 dark:bg-sky-700 text-sky-800 dark:text-white rounded-lg p-3 h-100">
                                <div class="card-body">
                                    <h6 class="card-subtitle mb-2 text-muted small">Logbook Records</h6>
                                    <h4 class="card-title">{{ $logbookRecordsCount }}</h4>
                                    <p class="card-text small">Total entries</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card bg-success bg-opacity-25 text-success dark:bg-success dark:bg-opacity-50 dark:text-white rounded-lg p-3 h-100">
                                <div class="card-body">
                                    <h6 class="card-subtitle mb-2 text-muted small">Approved Records</h6>
                                    <h4 class="card-title">{{ $approvedRecordsCount }}</h4>
                                    <p class="card-text small">Approved entries</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card bg-warning bg-opacity-25 text-warning dark:bg-warning dark:bg-opacity-50 dark:text-white rounded-lg p-3 h-100">
                                <div class="card-body">
                                    <h6 class="card-subtitle mb-2 text-muted small">Pending Approval</h6>
                                    <h4 class="card-title">{{ $pendingApprovalCount }}</h4>
                                    <p class="card-text small">Pending entries</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card bg-white dark:bg-gray-800 rounded-lg shadow-md p-4">
                    <h5 class="card-title fw-bold text-sky-800 dark:text-white mb-3">Recent Logbook Entries</h5>
                    <input type="text" id="searchRecords" class="form-control mb-3 dark:bg-gray-700 dark:border-gray-600 dark:text-white" placeholder="Search records...">
                    <div class="table-responsive">
                        <table class="table table-borderless table-hover table-striped mb-0" id="recordsTable">
                            <thead>
                                <tr class="text-sky-600 dark:text-sky-400">
                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($recentLogbookRecords as $record)
                                    <tr class="border-bottom border-gray-200 dark:border-gray-700 hover:bg-sky-50 dark:hover:bg-gray-700 text-sky-600 dark:text-sky-400">
                                        <td>{{ $record->title }}</td>
                                        <td>{{ $record->description }}</td>
                                        <td>
                                            @if ($record->status === 'approved')
                                                <span class="badge bg-success bg-opacity-25 text-success dark:text-white">Approved</span>
                                            @elseif ($record->status === 'rejected')
                                                <span class="badge bg-danger bg-opacity-25 text-danger dark:text-white">Rejected</span>
                                            @else
                                                <span class="badge bg-warning bg-opacity-25 text-warning dark:text-white">Pending</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const searchInput = document.getElementById('searchRecords');
    const tableRows = document.querySelectorAll('#recordsTable tbody tr');

    searchInput.addEventListener('keyup', function(event) {
        const searchTerm = event.target.value.toLowerCase();

        tableRows.forEach(row => {
            const title = row.cells[0].textContent.toLowerCase();
            const description = row.cells[1].textContent.toLowerCase();

            if (title.includes(searchTerm) || description.includes(searchTerm)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    });
</script>
<x-footer>

</x-footer>
