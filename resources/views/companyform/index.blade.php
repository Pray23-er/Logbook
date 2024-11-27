<x-layout>


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
<div class="mb-10">
    <a href="{{ route('student.dashboard') }}"><button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Back to Dashboard</button></a>
    </div

    </x-layout>


