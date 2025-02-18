<x-head></x-head>
<x-header></x-header>



<div class="container mx-auto p-4 pt-6">
    <h1 class="text-4xl font-bold mb-4 text-center text-indigo-900 dark:text-indigo-400"><i class="bi bi-person me-2"></i> Student Profile</h1>

    <div class="card max-w-2xl mx-auto bg-white dark:bg-gray-700 rounded-3xl shadow-lg p-6">
        <div class="card-body">
            <h2 class="text-2xl font-bold mb-4 text-sky-700 dark:text-sky-400"><i class="bi bi-info-circle me-2"></i> Student Information</h2>

            <div class="row mb-4">
                <div class="col-md-6">
                    <p class="mb-1 text-gray-600 dark:text-gray-400"><i class="bi bi-id-card me-2"></i> Matric Number:</p>
                    <p class="font-bold">{{ $student->matric_number }}</p>
                </div>
                <div class="col-md-6">
                    <p class="mb-1 text-gray-600 dark:text-gray-400"><i class="bi bi-person me-2"></i> Firstname:</p>
                    <p class="font-bold">{{ $student->firstname }}</p>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-6">
                    <p class="mb-1 text-gray-600 dark:text-gray-400"><i class="bi bi-person me-2"></i> Lastname:</p>
                    <p class="font-bold">{{ $student->lastname }}</p>
                </div>
                <div class="col-md-6">
                    <p class="mb-1 text-gray-600 dark:text-gray-400"><i class="bi bi-envelope me-2"></i> Email:</p>
                    <p class="font-bold">{{ $student->email }}</p>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-6">
                    <p class="mb-1 text-gray-600 dark:text-gray-400"><i class="bi bi-phone me-2"></i> Phone Number:</p>
                    <p class="font-bold">{{ $student->phone_number }}</p>
                </div>
                <div class="col-md-6">
                    <p class="mb-1 text-gray-600 dark:text-gray-400"><i class="bi bi-book me-2"></i> Course:</p>
                    <p class="font-bold">{{ $student->course_of_study }}</p>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-6">
                    <p class="mb-1 text-gray-600 dark:text-gray-400"><i class="bi bi-sort-numeric-down me-2"></i> Level:</p>
                    <p class="font-bold">{{ $student->level }}</p>
                </div>
                <div class="col-md-6">
                    <p class="mb-1 text-gray-600 dark:text-gray-400"><i class="bi bi-calendar me-2"></i> Year:</p>
                    <p class="font-bold">{{ $student->year }}</p>
                </div>
            </div>


            <h2 class="text-2xl font-bold mb-4 mt-4 text-sky-700 dark:text-sky-400"><i class="bi bi-clock me-2"></i> Account Information</h2>

            <div class="row mb-4">
                <div class="col-md-6">
                    <p class="mb-1 text-gray-600 dark:text-gray-400"><i class="bi bi-clock me-2"></i> Account Creation Date:</p>
                    <p class="font-bold">{{ $student->created_at }}</p>
                </div>
                </div>


            <div class="d-grid gap-2 mt-4">
                <a href="{{ route('student.dashboard') }}" class="btn btn-secondary rounded-lg transition duration-300">
                    <i class="bi bi-arrow-left-circle me-2"></i> Back to Dashboard
                </a>
            </div>
        </div>
    </div>
</div>

<x-footer></x-footer>
