<x-layout>

    <h1 class="text-3xl font-bold mb-4">Student Profile</h1>

    <div class="max-w-md bg-white rounded-lg shadow-md p-4">
        <h2 class="text-xl font-bold mb-2">Student Information</h2>
        <p class="text-gray-600 mb-2">Matric Number: {{ $student->matric_number }}</p>
        <p class="text-gray-600 mb-2">Firstname: {{ $student->firstname }}</p>
        <p class="text-gray-600 mb-2">Lastname: {{ $student->lastname }}</p>
        <p class="text-gray-600 mb-2">Email: {{ $student->email }}</p>
        <p class="text-gray-600 mb-2">Phone number: {{ $student->phone_number }}</p>
        <p class="text-gray-600 mb-2">Course: {{ $student->course_of_study }}</p>
        <p class="text-gray-600 mb-2">Level: {{ $student->level }}</p>
        <p class="text-gray-600 mb-2">Year: {{ $student->year }}</p>

        <!-- Add more fields as needed -->
    </div>
    <br>
    <div class="max-w-md bg-white rounded-lg shadow-md p-4">
        <b>Your Account was created on</b> : <span>{{ $student->created_at }}</span>
    </div>
    <br>
    <div class="mb-10">
        <a href="{{ route('student.dashboard') }}"><button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Back to Dashboard</button></a>
        </div>

</x-layout>
