<x-layout>

    <h1 style="color: green">School page</h1>

    <div style="display: flex; flex-direction: row; justify-content: space-between; flex: 1;">
        <button onclick="showStudentList()">
            <a href="#">View Student list</a>
        </button>
        <button>
            <a href="{{ route('school.dashboard') }}">View Logbook records</a>
        </button>
        <button>
            <a href="{{ route('school.dashboard') }}">View approval</a>
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

            <table border="1">
                <th>Matric Number</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Course</th>
                <th>Level</th>
                <th>Year</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>School Id</th>

                @foreach ($registeredStudents as $student)
                    <tr>
                        <td>{{ $student->matric_number }}</td>
                        <td>{{ $student->firstname }}</td>
                        <td>{{ $student->lastname }}</td>
                        <td>{{ $student->course_of_study }}</td>
                        <td>{{ $student->level }}</td>
                        <td>{{ $student->year }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->phone_number }}</td>
                        <td>{{ $student->school_id }}</td>
                    </tr>
                @endforeach
            </table>
        @else
            <p>No registered students found.</p>
        @endif
    </div>

    <br><br>


    <table border="1">
        <th>Company Name</th>
        <th>Company Phone Number</th>
        <th>Company Email</th>
        <th>Added By</th>
        <th>Matric Number</th>
        <th>Status</th>
        <th>Actions</th>

        @foreach ($company_forms as $company_forms)
            <tr>
                <td>{{ $company_forms->companyname }}</td>
                <td>{{ $company_forms->Company_phone_number }}</td>
                <td>{{ $company_forms->Company_email }}</td>
                <td>{{ $company_forms->Added_by }}</td>
                <td>{{ $company_forms->matric_number }}</td>
                <td>{{ $company_forms->status }}</td>
                <td>
                    @if ($company_forms->status == 'pending')
                        <a href="{{ route('form.approve', $company_forms->id) }}">Approve</a>
                        <a href="{{ route('form.reject', $company_forms->id) }}">Reject</a>
                    @endif
                </td>
            </tr>
        @endforeach
       </table>


    @auth
        <!-- User is authenticated -->
    @else
        <a href="{{ route('login') }}">Login</a>
    @endauth

    <script>
        function showStudentList() {
            document.getElementById("student-list").style.display = "block";
        }
    </script>


<br>
<br>
<br>



</x-layout>
