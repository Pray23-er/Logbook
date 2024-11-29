<x-layout>

<!-- Button to fill company form -->
<div class="flex justify-end mb-4">
    <a href="{{ route('companyform.create') }}">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Fill Company Form
        </button>
    </a>
</div>

<!-- Table to display company forms -->
<div class="overflow-x-auto relative shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
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
</div>

<!-- Button to go back to dashboard -->
<div class="flex justify-end mt-6">
    <a href="{{ route('student.dashboard') }}">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Back to Dashboard
        </button>
    </a>
</div>
</x-layout>


