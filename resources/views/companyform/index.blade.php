<x-layout>

<h1>
    how far
</h1>
<br>
<button><a href="{{ route('companyform.create') }}"> Fill Company Form</a></button>

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flowbite@1.5.3/dist/flowbite.min.css" />


<table class="w-full text-left text-sm text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="py-3 px-6">Company Name</th>
            <th scope="col" class="py-3 px-6">Company Phone Number</th>
            <th scope="col" class="py-3 px-6">Company Email</th>
            <th scope="col" class="py-3 px-6">Added By</th>
            <th scope="col" class="py-3 px-6">Matric Number</th>
            <th scope="col" class="py-3 px-6">Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($company_forms as $form)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="py-4 px-6">{{ $form->companyname }}</td>
                <td class="py-4 px-6">{{ $form->Company_phone_number }}</td>
                <td class="py-4 px-6">{{ $form->Company_email }}</td>
                <td class="py-4 px-6">{{ $form->Added_by }}</td>
                <td class="py-4 px-6">{{ $form->matric_number }}</td>
                <td class="py-4 px-6
                    {{ $form->status == 'approved' ? 'text-green-600' : ($form->status == 'rejected' ? 'text-red-600' : 'text-yellow-600') }}">
                    {{ $form->status }}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ route('student.dashboard') }}">Back to Dashboard</a>

    </x-layout>


