


<x-layout>


<h1>
    add student to your company
</h1>
<button><a href="{{ route('forms.create') }}">add student</a></button>
<br>
<table border="1">
    <th>First name</th>
    <th>Last name </th>
    <th>Matric Number</th>
    <th>School name</th>
    <th>Phone number</th>
    <th>address</th>
@foreach ($student_forms as $student_form)
<tr>

    <td>{{ $student_form->firstname }}</td>
    <td>{{ $student_form->lastname }}</td>
    <td>{{ $student_form->matric_number }}</td>
    <td>{{ $student_form->school_name }}</td>
    <td>{{ $student_form->phone_number }}</td>
    <td>{{ $student_form->address }}</td>

@endforeach
</tr>
</table>

<br>
<a href="{{ route('company.dashboard') }}"> Back to company page</a>

</x-layout>


