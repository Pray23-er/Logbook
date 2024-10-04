


<x-layout>

    <h1 style="color: green">
        School page
    </h1>
<div style="display: flex; flex-direction:row; justify-content:space-between; flex:1;">
    <button> <a href="{{ route('school.dashboard') }}"> View Student list </a> </button>
    <button> <a href="{{ route('school.dashboard') }}">  View Logbook records </a> </button>
    <button> <a href="{{ route('school.dashboard') }}">  View approval </a> </button>

</div>

<div>
    <button> <a href="{{ route('student_register.store') }}">ADD STUDENT</a> </button>
</div>
<br>
<h1>{{ $authenticatedSchool->name }}</h1>

<h2>Registered Students:</h2>

<table border="1">
    <th>Matric Number</th>
    <th>First name</th>
    <th>Last name </th>
    <th>Course</th>
    <th>Level</th>
    <th>Year</th>
    <th>Email</th>
    <th>Phone Number</th>
    <th>Id</th>
    @foreach($registeredStudents as $student)
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

@endforeach
</tr>
</table>
<style>
    button{
        background-color: green;
    }
</style>
<br> <br>

<table border="1">
    <th>Company name</th>
    <th>Company Email</th>
    <th> Company Phone Number </th>
    <th>Added by</th>
@foreach ($company_forms as $company_form )
<tr>
    <td>{{ $company_form->companyname }}</td>
    <td>{{ $company_form->Company_email }}</td>
    <td>{{ $company_form->Company_phone_number }}</td>
    <td>{{ $company_form->Added_by }}</td>
</tr>
@endforeach
</table>
<br> <br>
<a href="{{ route('login') }}">login page</a>

    </x-layout>


