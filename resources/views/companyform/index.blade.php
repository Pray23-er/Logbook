<x-layout>

<h1>
    how far
</h1>
<br>
<button><a href="{{ route('companyform.create') }}"> Fill Company Form</a></button>

<table border="1">
    <th>Company Name</th>
    <th>Company Phone Number</th>
    <th>Company Email</th>
    <th>Added By</th>
    <th>Matric Number</th>
    <th>Status</th>


    @foreach ($company_forms as $company_forms)
        <tr>
            <td>{{ $company_forms->companyname }}</td>
            <td>{{ $company_forms->Company_phone_number }}</td>
            <td>{{ $company_forms->Company_email }}</td>
            <td>{{ $company_forms->Added_by }}</td>
            <td>{{ $company_forms->matric_number }}</td>
            <td>{{ $company_forms->status }}</td>
        </tr>
        @endforeach
</table>

<a href="{{ route('student.dashboard') }}">Back to Dashboard</a>

    </x-layout>


