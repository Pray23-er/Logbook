<x-layout>
    <div class="container mx-auto p-4 pt-6 mt-10">
        <h1 class="text-4xl font-bold mb-4 text-indigo-900"> Student List</h1>



        <div class="overflow-x-auto rounded-lg shadow-md">
            <table class="table-auto w-full text-left">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="px-4 py-2 text-lg">First Name</th>
                        <th class="px-4 py-2 text-lg">Last Name</th>
                        <th class="px-4 py-2 text-lg">Matric Number</th>
                        <th class="px-4 py-2 text-lg">School Name</th>
                        <th class="px-4 py-2 text-lg">Phone Number</th>
                        <th class="px-4 py-2 text-lg">Address</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($student_forms as $student_form)
                        <tr class="border-b bg-gray-100 hover:bg-gray-200">
                            <td class="px-4 py-2">{{ $student_form->firstname }}</td>
                            <td class="px-4 py-2">{{ $student_form->lastname }}</td>
                            <td class="px-4 py-2">{{ $student_form->matric_number }}</td>
                            <td class="px-4 py-2">{{ $student_form->school_name }}</td>
                            <td class="px-4 py-2">{{ $student_form->phone_number }}</td>
                            <td class="px-4 py-2">{{ $student_form->address }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            <a href="{{ route('company.dashboard') }}" class="text-indigo-700 hover:text-indigo-900 font-bold underline">Back to Company Page</a>
        </div>
    </div>
</x-layout>
