<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        /* Custom Styles */
        body {
            background-color: #f8f9fa;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .card-header {
            border-radius: 10px 10px 0 0;
        }

        .table {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .table thead {
            background-color: #007bff;
            color: white;
        }

        .table th, .table td {
            vertical-align: middle;
        }

        .table tbody tr {
            transition: background-color 0.3s ease;
        }

        .table tbody tr:hover {
            background-color: #f1f1f1;
        }

        .badge {
            font-size: 0.9em;
            padding: 0.5em 0.75em;
        }

        .btn {
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .btn-sm {
            padding: 0.25rem 0.5rem;
            font-size: 0.875rem;
        }

        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-success:hover, .btn-danger:hover {
            opacity: 0.9;
            transform: translateY(-1px);
        }

        .alert {
            border-radius: 10px;
        }

        .img-thumbnail {
            border-radius: 5px;
            transition: transform 0.3s ease;
        }

        .img-thumbnail:hover {
            transform: scale(1.05);
        }

        .text-decoration-none {
            color: inherit;
        }

        .text-decoration-none:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <x-head></x-head>
    <x-header></x-header>

    @if (session('success'))
        <div class="alert alert-success d-flex align-items-center mx-3 mt-3" role="alert">
            <i class="bi bi-check-circle-fill me-2"></i>
            <div>{{ session('success') }}</div>
        </div>
    @endif

    <header class="text-white text-center py-4" style="background-color: #2c3e50;">
        <h1 class="h2">{{ $company->name }}</h1>
        <i class="bi bi-building fs-4"></i>
    </header>

    <div class="container my-4">
        <div class="row g-4">
            <!-- Company Information -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h2 class="h5 mb-0"><i class="bi bi-info-circle me-2"></i>Company Information</h2>
                    </div>
                    <div class="card-body">
                        <p class="mb-2"><strong>Name:</strong> {{ $company->name }}</p>
                        <p class="mb-0"><strong>Email:</strong> {{ $company->email }}</p>
                    </div>
                </div>
            </div>

            <!-- Account Information -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        <h2 class="h5 mb-0"><i class="bi bi-person-badge me-2"></i>Account Information</h2>
                    </div>
                    <div class="card-body">
                        <p class="mb-2"><strong>Account Created:</strong> {{ $company->created_at }}</p>
                        <p class="mb-0"><strong>Last Updated:</strong> {{ $company->updated_at }}</p>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-secondary text-white">
                        <h2 class="h5 mb-0"><i class="bi bi-gear me-2"></i>Quick Actions</h2>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2">
                                <a href="{{ route('company.view.student') }}" class="text-decoration-none">
                                    <i class="bi bi-people me-2"></i>View Student List
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="{{ route('forms.create') }}" class="text-decoration-none">
                                    <i class="bi bi-plus-lg me-2"></i>Add New Student
                                </a>
                            </li>
                            <li class="mb-0">
                                <a href="{{ route('company.password.edit') }}" class="text-decoration-none">
                                    <i class="bi bi-lock me-2"></i>Update Password
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Logbook Records -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-warning text-white">
                        <h2 class="h5 mb-0"><i class="bi bi-journal me-2"></i>Logbook Records</h2>
                    </div>
                    <div class="card-body">
                        <p class="mb-2"><strong>Total Records:</strong> {{ $company->logbooks->count() }}</p>
                        <a href="#" class="text-decoration-none" onclick="showLogbookList()">
                            <i class="bi bi-eye me-2"></i>View All Records
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Logbook Table (Hidden by Default) -->
        <div class="mt-4 d-none" id="logbook-list">
            <h2 class="h4 mb-3"><i class="bi bi-journal me-2"></i>Logbook Records</h2>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col"><i class="bi bi-card-text me-2"></i>Title</th>
                            <th scope="col"><i class="bi bi-chat-left-text me-2"></i>Description</th>
                            <th scope="col"><i class="bi bi-person me-2"></i>Student Name</th>
                            <th scope="col"><i class="bi bi-check2-circle me-2"></i>Status</th>
                            <th scope="col"><i class="bi bi-gear me-2"></i>Actions</th>
                            <th scope="col"><i class="bi bi-calendar me-2"></i>Created on</th>
                            <th scope="col"><i class="bi bi-chat-left-text me-2"></i>Feedback</th>
                            <th scope="col"><i class="bi bi-file-earmark me-2"></i>Uploads</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($company->logbooks as $logbook)
                        <tr>
                            <td>{{ $logbook->title }}</td>
                            <td>{{ $logbook->description }}</td>
                            <td>{{ $logbook->student->firstname }} {{ $logbook->student->lastname }}</td>
                            <td>
                                @if($logbook->status == 'approved')
                                    <span class="badge bg-success"><i class="bi bi-check2-circle me-1"></i>Approved</span>
                                @elseif($logbook->status == 'pending')
                                    <span class="badge bg-warning"><i class="bi bi-hourglass me-1"></i>Pending</span>
                                @elseif($logbook->status == 'rejected')
                                    <span class="badge bg-danger"><i class="bi bi-x-circle me-1"></i>Rejected</span>
                                @endif
                            </td>
                            <td>
                                <div class="d-flex gap-2">
                                    @if($logbook->status == 'pending')
                                        <form action="{{ route('logbook.approve', $logbook->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-success">
                                                <i class="bi bi-check2-circle me-1"></i>Approve
                                            </button>
                                        </form>
                                        <form action="{{ route('logbook.reject', $logbook->id) }}" method="POST">
                                            @csrf
                                            <textarea name="feedback" class="form-control form-control-sm" placeholder="Provide feedback"></textarea>
                                            <button type="submit" class="btn btn-sm btn-danger mt-2">
                                                <i class="bi bi-x-circle me-1"></i>Reject
                                            </button>
                                        </form>
                                    @elseif($logbook->status == 'approved')
                                        <form action="{{ route('logbook.reject', $logbook->id) }}" method="POST">
                                            @csrf
                                            <textarea name="feedback" class="form-control form-control-sm" placeholder="Provide feedback"></textarea>
                                            <button type="submit" class="btn btn-sm btn-danger mt-2">
                                                <i class="bi bi-x-circle me-1"></i>Reject
                                            </button>
                                        </form>
                                    @elseif($logbook->status == 'rejected')
                                        <form action="{{ route('logbook.approve', $logbook->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-success">
                                                <i class="bi bi-check2-circle me-1"></i>Approve
                                            </button>
                                        </form>
                                    @endif
                                </div>
                            </td>
                            <td>{{ $logbook->created_at }}</td>
                            <td>
                                @if($logbook->status == 'rejected')
                                    {{ $logbook->feedback }}
                                @endif
                            </td>
                            <td>
                                @if($logbook->thumbnail)
                                    @if(in_array(pathinfo($logbook->thumbnail, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'gif', 'svg']))
                                        <img src="{{ $logbook->thumbnail }}" alt="Thumbnail" class="img-thumbnail" style="max-width: 100px;">
                                    @else
                                        <a href="{{ $logbook->thumbnail }}" target="_blank" class="text-decoration-none">
                                            <i class="bi bi-file-earmark me-1"></i>View File
                                        </a>
                                    @endif
                                @else
                                    <i class="bi bi-x-circle"></i> No thumbnail
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <x-footer></x-footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function showLogbookList() {
            document.getElementById("logbook-list").classList.remove("d-none");
        }
    </script>
</body>
</html>
