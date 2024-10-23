<x-layout>

    <h1 style="color: green">School page</h1>

    <div style="display: flex; flex-direction: row; justify-content: space-between; flex: 1;">
        <button onclick="showStudentList()">
            <a href="#">View Student list</a>
        </button>
        <button>
            <a href="{{ route('school.dashboard') }}">View Logbook records</a>
        </button>
        <button onclick="Viewapproval()">
            <a href="#">View approval</a>
        </button>
    </div>

    <div>
        <button>
            <a href="{{ route('student_register.store') }}">ADD STUDENT</a>
        </button>
    </div>

    <br>



    <div class="mt-4">
        <h1 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $authenticatedSchool->name }}</h1>
    </div>

    <div id="student-list" style="display: none;">
        @if (!empty($registeredStudents) && count($registeredStudents) > 0)
            <h2>Registered Students:</h2>

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



                @foreach ($registeredStudents as $student)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4" >{{ $student->matric_number }}</td>
                        <td class="px-6 py-4">{{ $student->firstname }}</td>
                        <td class="px-6 py-4">{{ $student->lastname }}</td>
                        <td class="px-6 py-4">{{ $student->course_of_study }}</td>
                        <td class="px-6 py-4">{{ $student->level }}</td>
                        <td class="px-6 py-4">{{ $student->year }}</td>
                        <td class="px-6 py-4">{{ $student->email }}</td>
                        <td class="px-6 py-4">{{ $student->phone_number }}</td>

                    </tr>
                @endforeach
            </table>
        @else
            <p>No registered students found.</p>
        @endif
    </div>

    <br><br>

<div id="approval-list" style="display: none;">

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

        @foreach ($company_forms as $company_forms)
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="px-6 py-4">{{ $company_forms->companyname }}</td>
                <td class="px-6 py-4">{{ $company_forms->Company_phone_number }}</td>
                <td class="px-6 py-4">{{ $company_forms->Company_email }}</td>
                <td class="px-6 py-4">{{ $company_forms->Added_by }}</td>
                <td class="px-6 py-4">{{ $company_forms->matric_number }}</td>
                <td class="px-6 py-4">{{ $company_forms->status }}</td>
                <td class="px-6 py-4">
                    @if ($company_forms->status == 'pending')
                        <a href="{{ route('form.approve', $company_forms->id) }}">Approve</a>
                        <a href="{{ route('form.reject', $company_forms->id) }}">Reject</a>
                    @endif
                </td>
            </tr>
        @endforeach
       </table>
</div>



    @auth
        <!-- User is authenticated -->
    @else
        <a href="{{ route('login') }}">Login</a>
    @endauth

    <script>
        function showStudentList() {
            document.getElementById("student-list").style.display = "block";
        }
        function Viewapproval() {
            document.getElementById("approval-list").style.display = "block";
        }
    </script>


<br>
<br>
<br>



</x-layout>
