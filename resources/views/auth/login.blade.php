<x-head>

</x-head>

<x-header>

</x-header>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7rxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        body {
            background: linear-gradient(to bottom, #f8f9fa, #e9ecef); /* Example background gradient */
            min-height: 100vh; /* Ensure full viewport height */
            display: flex;
            flex-direction: column;
        }

        .container {
            flex: 1; /* Allow container to take up available space */
            max-width: 900px;
        }

        .card {
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>




<div class="container mt-5 py-5">
    <div class="text-center mb-4">
        <h1 class="h2 fw-bold mb-3">Login into your account</h1>
        <p class="text-muted">Select your account type to continue</p>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card border-0 shadow-lg rounded-4">
                <div class="card-body text-center">
                    <i class="bi bi-person-fill text-primary mb-3" style="font-size: 3rem;"></i>
                    <h5 class="card-title fw-bold">Student Login</h5>
                    <p class="card-text text-muted">Access the student dashboard for logbook entry, submission and approvals.</p>
                    <a href="{{ route('student_login') }}" class="btn btn-primary w-100">
                        Login as Student <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card border-0 shadow-lg rounded-4">
                <div class="card-body text-center">
                    <i class="bi bi-building text-primary mb-3" style="font-size: 3rem;"></i>
                    <h5 class="card-title fw-bold">School Login</h5>
                    <p class="card-text text-muted">Access school dashboard for effective and real time monitoring of your students.</p>
                    <a href="{{ route('school.login') }}" class="btn btn-primary w-100">
                        Login as School <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card border-0 shadow-lg rounded-4">
                <div class="card-body text-center">
                    <i class="bi bi-briefcase text-primary mb-3" style="font-size: 3rem;"></i>
                    <h5 class="card-title fw-bold">Company Login</h5>
                    <p class="card-text text-muted">Engage actively by accessing the company dashboard for logbook approvals.</p>
                    <a href="{{ route('company.login') }}" class="btn btn-primary w-100">
                        Login as Company <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

<x-footer>

</x-footer>
