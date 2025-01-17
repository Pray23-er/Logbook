<x-head>

</x-head>

<x-header>


</x-header>

@vite('resources/css/app.css')



<header class="bg-gray-200 text-white text-center p-4">
    <h1 class="text-2xl font-bold">{{ $authenticatedSchool->name }}</h1>
</header>
<div class="flex h-screen">

    <div class="w-64 bg-gray-100 p-4 flex-shrink-0 h-screen border-r border-gray-300">
        <h2 class="text-lg font-bold mb-4">Navigation</h2>
        <ul class="space-y-4">
            <li>
                <a href="#student-list" class="flex items-center text-gray-600 hover:text-gray-900 rounded-md p-2 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354A4 4 0 1112 12.354A4 4 0 0112 4.354z" />
                    </svg>
                    Student List
                </a>
            </li>
            <li>
                <a href="#approval-list" class="flex items-center text-gray-600 hover:text-gray-900 rounded-md p-2 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m-6-4h6m-6 10h6" />
                    </svg>
                    Submitted Industries
                </a>
            </li>
            <li>
                <a href="{{ route('logbook.page') }}" class="flex items-center text-gray-600 hover:text-gray-900 rounded-md p-2 transition-colors">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 012-2h2a2 2 0 012 2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                  </svg>
                  Logbook Records
                </a>
              </li>
            <li>
                <a href="{{ route('student_register.store') }}" class="flex items-center text-gray-600 hover:text-gray-900 rounded-md p-2 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.856-1.154 2.856-2.642V15m-13.856 0L9 14.01M6 8h9.612A4 4 0 114.388 4H6z" />
                    </svg>
                    Add Student
                </a>
            </li>
            <li>
                <a href="{{ route('school.calendar') }}" class="flex items-center text-gray-600 hover:text-gray-900 rounded-md p-2 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m0 4M8 3h13M21 3v4m-4 0h-5M16 17c-4.411 0-8-1.87-8-4.5v-3c0-1.232.567-2.23 1.328-2.902A4.414 4.414 0 009 7c0 1.12 0.385 2.083 1 2.902V17c0 1.232.567 2.23 1.328 2.902A4.414 4.414 0 0016 21c4.411 0 8-1.87 8-4.5v-3c0-1.232-.567-2.23-1.328-2.902A4.414 4.414 0 0016 17z" />
                    </svg>
                    SIWES Calendar
                </a>
            </li>
        </ul>
    </div>

    <div class="flex-1 p-4">
        <div id="student-list" class="mt-4">
            <h2 class="text-lg font-bold mb-4"><i class="bi bi-people"></i> Registered Students:</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <i class="bi bi-id-card"></i> Matric Number
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <i class="bi bi-person"></i> First name
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <i class="bi bi-person"></i> Last name
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <i class="bi bi-book"></i> Course
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <i class="bi bi-sort-numeric-down"></i> Level
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <i class="bi bi-calendar"></i> Year
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <i class="bi bi-envelope"></i> Email
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <i class="bi bi-phone"></i> Phone Number
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($registeredStudents as $student)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $student->matric_number }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $student->firstname }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $student->lastname }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $student->course_of_study }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $student->level }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $student->year }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $student->email }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $student->phone_number }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div id="approval-list" class="mt-4 hidden">
            <h2 class="text-lg font-bold mb-4"><i class="bi bi-check2-circle"></i> Recently Submitted Industries:</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <i class="bi bi-building"></i> Company Name
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <i class="bi bi-phone"></i> Company Phone Number
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <i class="bi bi-envelope"></i> Company Email
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <i class="bi bi-person"></i> Added By
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <i class="bi bi-id-card"></i> Matric Number
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <i class="bi bi-check2-circle"></i> Status
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <i class="bi bi-gear"></i> Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($company_forms as $form)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $form->companyname }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $form->Company_phone_number }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $form->Company_email }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $form->Added_by }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $form->matric_number }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-md text-xs font-medium leading-4">
                                        @if ($form->status == 'pending')
                                            <span class="bg-yellow-100 text-yellow-800"><i class="bi bi-hourglass"></i> Pending</span>
                                        @elseif ($form->status == 'approved')
                                            <span class="bg-green-100 text-green-800"><i class="bi bi-check2-circle"></i> Approved</span>
                                        @else
                                            <span class="bg-red-100 text-red-800"><i class="bi bi-x-circle"></i> Rejected</span>
                                        @endif
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if ($form->status == 'pending')
                                        <a href="{{ route('form.approve', $form->id) }}" class="text-green-600 hover:text-green-900"><i class="bi bi-check2-circle"></i> Approve</a> |
                                        <a href="{{ route('form.reject', $form->id) }}" class="text-red-600 hover:text-red-900"><i class="bi bi-x-circle"></i> Reject</a>
                                    @endif
                                    <form action="{{ route('companyform.destroy', $form->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this record?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900"><i class="bi bi-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div id="logbook-list" class="mt-4 hidden">
            <h2 class="text-lg font-bold mb-4"><i class="bi bi-journal"></i> Logbook Record</h2>

            <ul class="space-y-2">
                @foreach($registeredStudents as $student)
                    <li>
                        <a href="?matric_number={{ $student->matric_number }}" class="text-blue-600 hover:text-blue-900">{{ $student->firstname }} {{ $student->lastname }}</a>
                    </li>
                @endforeach
            </ul>

            @if(isset($selectedStudent) && isset($studentLogbooks))
                <div class="bg-gray-100 p-4 mt-4 border border-gray-300 rounded shadow">
                    <h2 class="text-2xl font-bold mb-4">{{ $selectedStudent->firstname }} {{ $selectedStudent->lastname }}'s Logbook</h2>
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    <i class="bi bi-card-text"></i> Title
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    <i class="bi bi-chat-left-text"> Description</i>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        <i class="bi bi-chat-left-text">Created At</i>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        <i class="bi bi-check2-circle"></i> Status
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($studentLogbooks as $logbook)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $logbook->title }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $logbook->description }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $logbook->created_at }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-md text-xs font-medium leading-4">
                                                @if ($logbook->status == 'pending')
                                                    <span class="bg-yellow-100 text-yellow-800"><i class="bi bi-hourglass"></i> Pending</span>
                                                @elseif ($logbook->status == 'approved')
                                                    <span class="bg-green-100 text-green-800"><i class="bi bi-check2-circle"></i> Approved</span>
                                                @else
                                                    <span class="bg-red-100 text-red-800"><i class="bi bi-x-circle"></i> Rejected</span>
                                                @endif
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </div>




</div>

<script>

document.addEventListener("DOMContentLoaded", function () {
  const studentListLink = document.querySelector("a[href='#student-list']");
  const approvalListLink = document.querySelector("a[href='#approval-list']");
  const logbookListLink = document.querySelector("a[href='#logbook-list']");
  const studentListSection = document.querySelector("#student-list");
  const approvalListSection = document.querySelector("#approval-list");
  const logbookListSection = document.querySelector("#logbook-list");

  // Function to show a section and hide others
  function showSection(section) {
    studentListSection.classList.add('hidden');
    approvalListSection.classList.add('hidden');
    logbookListSection.classList.add('hidden');
    section.classList.remove('hidden');
  }

  // Show the student list by default
  showSection(studentListSection);

  studentListLink.addEventListener("click", function (event) {
    event.preventDefault(); // Prevent default anchor behavior
    showSection(studentListSection);
  });

  approvalListLink.addEventListener("click", function (event) {
    event.preventDefault();
    showSection(approvalListSection);
  });

  // Remove the event listener for the logbook link
  // logbookListLink.addEventListener("click", function (event) {
  //   event.preventDefault();
  //   showSection(logbookListSection);
  // });
});
</script>

<x-footer>

</x-footer>
