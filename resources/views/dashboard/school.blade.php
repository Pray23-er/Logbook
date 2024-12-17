<x-layout>

<h1 class="text-3xl font-bold mb-4" style="color: green">{{ $authenticatedSchool->name }}</h1>
<div class="flex h-screen">
<!-- Sidebar -->
<div class="w-64 bg-blue-100 p-4 flex-shrink-0 h-screen border-r border-gray-300">
<h2 class="text-lg font-bold mb-4">Navigation</h2>
<ul>
<li class="mb-4">
<a href="#student-list" class="text-gray-600 hover:text-gray-900">
Student list
</a>
</li>
<li class="mb-4">
<a href="#approval-list" class="text-gray-600 hover:text-gray-900">
Submitted Industries
</a>
</li>
<li class="mb-4">
<a href="#logbook-list" class="text-gray-600 hover:text-gray-900">
 Logbook Records
</a>
</li>
</ul>
        <h2 class="text-lg font-bold mb-4 mt-4">Actions</h2>
        <ul>
            <li class="mb-4">
                <a href="{{ route('student_register.store') }}" class="text-gray-600 hover:text-gray-900">
                    Add Student
                </a>
            </li>
            <li class="mb-4">
                <a href="{{ route('school.dashboard') }}" class="text-gray-600 hover:text-gray-900">
                    ADMIN PAGE
                </a>
            </li>
            <li class="mb-4">
                <a href="{{ route('school.calendar') }}" class="text-gray-600 hover:text-gray-900">
                     SIWES Calendar
                </a>
            </li>

        </ul>
    </div>
    <!-- Main content -->
    <div class="flex-1 p-4">
        <!-- Student list section -->
        <div id="student-list" class="mt-4">
            @if (!empty($registeredStudents) && count($registeredStudents) > 0)
                <h2 class="text-lg font-bold mb-4">Registered Students:</h2>
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">Matric Number</th>
                            <th scope="col" class="px-6 py-3">First name</th>
                            <th scope="col" class="px-6 py-3">Last name</th>
                            <th scope="col" class="px-6 py-3">Course</th>
                            <th scope="col" class="px-6 py-3">Level</th>
                            <th scope="col" class="px-6 py-3">Year</th>
                            <th scope="col" class="px-6 py-3">Email</th>
                            <th scope="col" class="px-6 py-3">Phone Number</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($registeredStudents as $student)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-6 py-4">{{ $student->matric_number }}</td>
                                <td class="px-6 py-4">{{ $student->firstname }}</td>
                                <td class="px-6 py-4">{{ $student->lastname }}</td>
                                <td class="px-6 py-4">{{ $student->course_of_study }}</td>
                                <td class="px-6 py-4">{{ $student->level }}</td>
                                <td class="px-6 py-4">{{ $student->year }}</td>
                                <td class="px-6 py-4">{{ $student->email }}</td>
                                <td class="px-6 py-4">{{ $student->phone_number }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>No registered students found.</p>
            @endif
        </div>

        <!-- Approval list section -->
        <div id="approval-list" class="mt-4">
            <h2 class="text-lg font-bold mb-4">Recently Submitted Industries:</h2>
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">

                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">Company Name</th>
                        <th scope="col" class="px-6 py-3">Company Phone Number</th>
                        <th scope="col" class="px-6 py-3">Company Email</th>
                        <th scope="col" class="px-6 py-3">Added By</th>
                            <th scope="col" class="px-6 py-3">Matric Number</th>
                            <th scope="col" class="px-6 py-3">Status</th>
                            <th scope="col" class="px-6 py-3">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($company_forms as $form)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4">{{ $form->companyname }}</td>
                            <td class="px-6 py-4">{{ $form->Company_phone_number }}</td>
                            <td class="px-6 py-4">{{ $form->Company_email }}</td>
                            <td class="px-6 py-4">{{ $form->Added_by }}</td>
                            <td class="px-6 py-4">{{ $form->matric_number }}</td>
                            <td class="px-6 py-4">
                            <span class="
                            {{ $form->status == 'pending' ? 'bg-yellow-200 text-yellow-600' :
                            ($form->status == 'approved' ? 'bg-green-200 text-green-600' : 'bg-red-200 text-red-600') }}
                            py-2 px-4 rounded">
                            {{ ucfirst($form->status) }}
                            </span>
                            </td>
                            <td class="px-6 py-4 flex justify-around">
                            @if ($form->status == 'pending')
                            <a href="{{ route('form.approve', $form->id) }}"
                            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                            Approve
                            </a>
                            <a href="{{ route('form.reject', $form->id) }}"
                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                            Reject
                            </a>
                            @endif
                            </td>
                            <td>
                            <form action="{{ route('companyform.destroy', $form->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                            Delete
                            </button>
                            </form>
                            </td>
                            </tr>
                            @endforeach
                            </tbody>
                            </table>
                            </div>

                            <!-- Logbook list section -->
                            <div id="logbook-list" class="mt-4">
                            <h2 class="text-2xl font-bold mb-4">Logbook Record</h2>

                            <ul>
                            @foreach($registeredStudents as $student)
                            <li class="mb-2">
                            {{ $student->name }}
                            <a href="?matric_number={{ $student->matric_number }}" class="text-blue-600 hover:text-blue-800">{{ $student->firstname }}-{{ $student->lastname }} </a>
                            </li>
                            @endforeach
                            </ul>

                            @if(isset($selectedStudent) && isset($studentLogbooks))
                            <div class="bg-gray-100 p-4 mt-4 border border-gray-300 rounded shadow">
                            <h2 class="text-2xl font-bold mb-4">{{ $selectedStudent->firstname }} {{ $selectedStudent->lastname }}'s Logbook</h2>
                            <table class="w-full table-auto border border-green-300">
                            <thead>
                            <tr class="bg-green-200 border-b border-green-300">
                            <th class="px-4 py-2 text-green-700">Title</th>
                            <th class="px-4 py-2 text-green-700">Description</th>
                            <th class="px-4 py-2 text-green-700">Created At</th>
                            <th class="px-4 py-2 text-green-700">Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($studentLogbooks as $logbook)
                            <tr class="border-b border-green-300 hover:bg-green-100">
                                <td class="px-4 py-2 text-green-700">{{ $logbook->title }}</td>
                                <td class="px-4 py-2 text-green-700">{{ $logbook->description }}</td>
                                <td class="px-4 py-2 text-green-700">{{ $logbook->created_at }}</td>
                                <td class="px-4 py-2 text-green-700">{{ $logbook->status }}</td>
                                </tr>
                                @endforeach
                                </tbody>
                                </table>
                                </div>
                                @endif
                                </div>

                                </div>
                                </div>
                                <script>
                                    document.addEventListener("DOMContentLoaded", function () {
                                    const studentListLink = document.querySelector("#student-list-link");
                                    const approvalListLink = document.querySelector("#approval-list-link");
                                    const logbookListLink = document.querySelector("#logbook-list-link");

                                const studentListSection = document.querySelector("#student-list");
                                const approvalListSection = document.querySelector("#approval-list");
                                const logbookListSection = document.querySelector("#logbook-list");

                                studentListLink.addEventListener("click", function () {
                                    studentListSection.style.display = "block";
                                    approvalListSection.style.display = "none";
                                    logbookListSection.style.display = "none";
                                });

                                approvalListLink.addEventListener("click", function () {
                                    studentListSection.style.display = "none";
                                    approvalListSection.style.display = "block";
                                    logbookListSection.style.display = "none";
                                });

                                logbookListLink.addEventListener("click", function () {
                                    studentListSection.style.display = "none";
                                    approvalListSection.style.display = "none";
                                    logbookListSection.style.display = "block";
                                });
                            });
 </script>
</x-layout>
