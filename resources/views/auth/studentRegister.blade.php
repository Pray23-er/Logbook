<x-head>
</x-head>

<x-header>
</x-header>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        body {
            background: linear-gradient(to bottom, #f0f0f0, #e0e0e0); /* Light gradient background */
        }

        .card {
            border: none; /* Remove default border */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add a subtle shadow */
        }

        .card-header {
            background-color: #007bff; /* Blue header */
            color: white;
        }

        .form-label {
            font-weight: 500; /* Slightly bolder labels */
        }

        .btn-primary {
            background-color: #007bff; /* Blue button */
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }

        .alert-danger {
            background-color: #f8d7da; /* Light red background for errors */
            color: #842029;
            border-color: #f5c2c7;
        }

        .invalid-feedback {
            color: #dc3545; /* Red color for invalid feedback */
        }
    </style>
</head>

<body class="min-vh-100">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h1 class="h3 fw-bold">Student Registration</h1>
                        <p class="mt-2">Please fill in your details to register.</p>
                    </div>
                    <div class="card-body">

                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('student_register.store') }}" class="space-y-3"
                            enctype="multipart/form-data">
                            @csrf

                            @include('components.form-input', ['label' => 'First Name', 'name' => 'firstname', 'type' => 'text'])
                            @include('components.form-input', ['label' => 'Last Name', 'name' => 'lastname', 'type' => 'text'])
                            @include('components.form-input', ['label' => 'Email', 'name' => 'email', 'type' => 'email'])
                            @include('components.form-input', ['label' => 'Matric Number', 'name' => 'matric_number', 'type' => 'text'])
                            @include('components.form-input', ['label' => 'Year', 'name' => 'year', 'type' => 'text'])
                            @include('components.form-input', ['label' => 'Level', 'name' => 'level', 'type' => 'text'])
                            @include('components.form-input', ['label' => 'Course of Study', 'name' => 'course_of_study', 'type' => 'text'])
                            @include('components.form-input', ['label' => 'Phone Number', 'name' => 'phone_number', 'type' => 'text'])
                            @include('components.form-input', ['label' => 'Password', 'name' => 'password', 'type' => 'password'])
                            @include('components.form-input', ['label' => 'Confirm Password', 'name' => 'password_confirmation', 'type' => 'password'])

                            <div class="mb-3">
                                <label for="image" class="form-label">Profile Picture</label>
                                <input type="file" id="image" name="image" class="form-control @error('image') is-invalid @enderror">
                                @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="w-100 btn btn-primary">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-3">
            <a href="{{ route('school.dashboard') }}" class="btn btn-secondary">Back to School Page</a>
        </div>
    </div>
</body>

</html>

<x-footer>

</x-footer>
