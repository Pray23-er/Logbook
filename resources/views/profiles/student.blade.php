<x-head>

</x-head>

<x-header>

</x-header>

@vite('resources/css/app.css')

<div class="container mx-auto p-4 pt-6 bg-gray-200 dark:bg-gray-800 rounded-lg shadow-md">
    <h1 class="text-4xl font-bold mb-4 text-center"><i class="bi bi-person"></i> Student Profile</h1>

    <div class="max-w-2xl mx-auto bg-white dark:bg-gray-700 rounded-lg shadow-md p-4">
        <h2 class="text-2xl font-bold mb-2"><i class="bi bi-info-circle"></i> Student Information</h2>
        <div class="flex flex-col mb-4">
            <span class="text-gray-600 mb-1"><i class="bi bi-id-card"></i> Matric Number:</span>
            <span class="text-lg font-bold">{{ $student->matric_number }}</span>
        </div>
        <div class="flex flex-col mb-4">
            <span class="text-gray-600 mb-1"><i class="bi bi-person"></i> Firstname:</span>
            <span class="text-lg font-bold">{{ $student->firstname }}</span>
        </div>
        <div class="flex flex-col mb-4">
            <span class="text-gray-600 mb-1"><i class="bi bi-person"></i> Lastname:</span>
            <span class="text-lg font-bold">{{ $student->lastname }}</span>
        </div>
        <div class="flex flex-col mb-4">
            <span class="text-gray-600 mb-1"><i class="bi bi-envelope"></i> Email:</span>
            <span class="text-lg font-bold">{{ $student->email }}</span>
        </div>
        <div class="flex flex-col mb-4">
            <span class="text-gray-600 mb-1"><i class="bi bi-phone"></i> Phone Number:</span>
            <span class="text-lg font-bold">{{ $student->phone_number }}</span>
        </div>
        <div class="flex flex-col mb-4">
            <span class="text-gray-600 mb-1"><i class="bi bi-book"></i> Course:</span>
            <span class="text-lg font-bold">{{ $student->course_of_study }}</span>
        </div>
        <div class="flex flex-col mb-4">
            <span class="text-gray-600 mb-1"><i class="bi bi-sort-numeric-down"></i> Level:</span>
            <span class="text-lg font-bold">{{ $student->level }}</span>
        </div>
        <div class="flex flex-col mb-4">
            <span class="text-gray-600 mb-1"><i class="bi bi-calendar"></i> Year:</span>
            <span class="text-lg font-bold">{{ $student->year }}</span>
        </div>
    </div>

    <br>

    <div class="max-w-2xl mx-auto bg-white dark:bg-gray-700 rounded-lg shadow-md p-4">
        <div class="flex flex-col mb-4">
            <span class="text-gray-600 mb-1"><i class="bi bi-clock"></i> Account Creation Date:</span>
            <span class="text-lg font-bold">{{ $student->created_at }}</span>
        </div>
    </div>


    <div class="flex justify-center mb-4 mt-4">
        <a href="{{ route('student.dashboard') }}"><button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><i class="bi bi-arrow-left-circle"></i> Back to Dashboard</button></a>
    </div>
</div>

<x-footer>

</x-footer>
