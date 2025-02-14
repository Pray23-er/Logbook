<x-head>

</x-head>

<x-header>


</x-header>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $authenticatedSchool->name }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    @vite('resources/css/app.css')
    <style>
        /* Custom styles for better table appearance */
        .table-container {
            overflow-x: auto; /* Enable horizontal scrolling if needed */
        }
        .table th,
        .table td {
            padding: 0.75rem; /* Adjust padding as needed */
            text-align: left; /* Align text to the left */
            vertical-align: middle;
            border-top: 1px solid #dee2e6; /* Add border to cells */
            white-space: nowrap; /* Prevent text from wrapping */
        }

        .table th {
            background-color: #f8f9fa; /* Light gray background for header */
            font-weight: 600;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, 0.05); /* Subtle striped background */
        }

        .table-hover tbody tr:hover {
            background-color: rgba(0, 0, 0, 0.075); /* Hover background color */
        }
    </style>
</head>

<body>

    <header class="bg-secondary text-white text-center p-4">
        <h1 class="text-2xl font-bold">{{ $authenticatedSchool->name }}</h1>
    </header>

    <div class="container-fluid d-flex vh-100">
        <div class="col-auto w-auto bg-light p-4 border-end">
            <h2 class="text-lg font-bold mb-4">Navigation</h2>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="#student-list" class="nav-link text-dark"><i class="bi bi-people me-2"></i> Student
                        List</a>
                </li>
                <li class="nav-item">
                    <a href="#approval-list" class="nav-link text-dark"><i class="bi bi-check2-circle me-2"></i>
                        Submitted Industries</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('logbook.page') }}" class="nav-link text-dark"><i
                            class="bi bi-journal-text me-2"></i> Logbook Records</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('student_register.store') }}" class="nav-link text-dark"><i
                            class="bi bi-person-plus me-2"></i> Add Student</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('school.calendar') }}" class="nav-link text-dark"><i
                            class="bi bi-calendar me-2"></i> SIWES Calendar</a>
                </li>
            </ul>
        </div>

        <div class="col overflow-y-auto p-4">
            <div id="student-list">
                <h2 class="text-lg font-bold mb-4"><i class="bi bi-people"></i> Registered Students:</h2>
                <div class="table-container">
                    <table class="table table-striped table-hover table-bordered w-100">
                        <thead>
                            <tr>
                                <th><i class="bi bi-id-card"></i> Matric Number</th>
                                <th><i class="bi bi-person"></i> First name</th>
                                <th><i class="bi bi-person"></i> Last name</th>
                                <th><i class="bi bi-book"></i> Course</th>
                                <th><i class="bi bi-sort-numeric-down"></i> Level</th>
                                <th><i class="bi bi-calendar"></i> Year</th>
                                <th><i class="bi bi-envelope"></i> Email</th>
                                <th><i class="bi bi-phone"></i> Phone Number</th>
                                <th><i class="bi bi-gear"></i> Actions</th>
                            </tr>
                        </thead>
                        <tbody>
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
                                    <td>
                                        <form action="{{ route('student.destroy', $student) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i
                                                    class="bi bi-trash"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="approval-list" class="hidden">
                <h2 class="text-lg font-bold mb-4"><i class="bi bi-check2-circle"></i> Recently Submitted
                    Industries:</h2>
                <div class="table-container">
                    <table class="table table-striped table-hover table-bordered w-100">
                        <thead>
                            <tr>
                                <th><i class="bi bi-building"></i> Company Name</th>
                                <th><i class="bi bi-phone"></i> Company Phone Number</th>
                                <th><i class="bi bi-envelope"></i> Company Email</th>
                                <th><i class="bi bi-person"></i> Added By</th>
                                <th><i class="bi bi-id-card"></i> Matric Number</th>
                                <th><i class="bi bi-check2-circle"></i> Status</th>
                                <th><i class="bi bi-gear"></i> Actions</th>
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
                                        <span class="badge bg-{{ $form->status == 'pending' ? 'warning text-dark' : ($form->status == 'approved' ? 'success' : 'danger') }}">
                                            <i class="bi bi-{{ $form->status == 'pending' ? 'hourglass' : ($form->status == 'approved' ? 'check2-circle' : 'x-circle') }}"></i>
                                            {{ ucfirst($form->status) }}
                                        </span>
                                    </td>
                                    <td>
                                        @if ($form->status == 'pending')
                                            <a href="{{ route('form.approve', $form->id) }}"
                                                class="btn btn-success btn-sm"><i class="bi bi-check2-circle"></i>
                                                Approve</a>
                                            <a href="{{ route('form.reject', $form->id) }}"
                                                class="btn btn-danger btn-sm"><i class="bi bi-x-circle"></i>
                                                Reject</a>
                                        @endif
                                        <form action="{{ route('companyform.destroy', $form->id) }}" method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete this record?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i
                                                    class="bi bi-trash"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {
  const studentListLink = document.querySelector("a[href='#student-list']");
  const approvalListLink = document.querySelector("a[href='#approval-list']");
  const studentListSection = document.getElementById("student-list");
  const approvalListSection = document.getElementById("approval-list");

  function showSection(section) {
    studentListSection.classList.add('hidden');
    approvalListSection.classList.add('hidden');
    section.classList.remove('hidden');
  }

  showSection(studentListSection);

  studentListLink.addEventListener("click", function (event) {
    event.preventDefault();
    showSection(studentListSection);
  });

  approvalListLink.addEventListener("click", function (event) {
    event.preventDefault();
    showSection(approvalListSection);
  });
});
</script>

<x-footer>

</x-footer>
