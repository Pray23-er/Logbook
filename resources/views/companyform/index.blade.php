
<x-head></x-head>
<x-header></x-header>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Forms</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .table-responsive {
            overflow-x: auto;
        }
        .table-custom { /* Custom table styles */
            border-collapse: separate; /* Separate cell borders */
            border-spacing: 0; /* Remove default spacing */
            min-width: 100%; /* Ensure full width */
        }
        .table-custom th, .table-custom td {
            padding: 1rem; /* Adjust padding */
            text-align: left; /* Align text left */
            border-bottom: 1px solid #dee2e6; /* Light border */
            white-space: nowrap; /* Prevent text wrapping */
        }
        .table-custom th {
            background-color: #f8f9fa; /* Light background for header */
            font-weight: 600; /* Slightly bolder font */
            text-transform: uppercase; /* Uppercase header text */
            color: #343a40; /* Darker text color */
        }
        .table-custom tbody tr:hover {
            background-color: #f5f5f5; /* Subtle hover effect */
        }
        .badge {
            font-size: 0.9rem; /* Adjust badge size */
            padding: 0.3rem 0.6rem; /* Adjust badge padding */
        }

    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="mb-4">
                    <h1>Company Forms</h1>
                    <p class="text-muted">Manage and view all submitted company information</p>
                </div>

                <div class="d-flex justify-content-end mb-4">
                    <a href="{{ route('companyform.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus mr-2"></i> New Company Form
                    </a>
                </div>

                <div class="card">
                    <div class="card-body table-responsive">
                        <table class="table table-custom table-bordered table-hover">  <thead>
                                <tr class="table-light">
                                    <th>Company Name</th>
                                    <th>Phone Number</th>
                                    <th>Email</th>
                                    <th>Added By</th>
                                    <th>Matric Number</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($company_forms as $form)
                                    <tr>
                                        <td>{{ $form->companyname }}</td>
                                        <td>{{ $form->Company_phone_number }}</td>
                                        <td>{{ $form->Company_email }}</td>
                                        <td>{{ $form->Added_by }}</td>
                                        <td>{{ $form->matric_number }}</td>
                                        <td>
                                            <span class="badge
                                                @if ($form->status == 'approved') bg-success
                                                @elseif ($form->status == 'rejected') bg-danger
                                                @else bg-warning @endif">
                                                {{ ucfirst($form->status) }}
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="mt-4 d-flex justify-content-end">
                    <a href="{{ route('student.dashboard') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left mr-2"></i> Back to Dashboard
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<x-footer></x-footer>
