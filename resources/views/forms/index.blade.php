<x-head></x-head>
<x-header></x-header>



<div class="container mx-auto p-4 pt-6 mt-10">
    <h1 class="text-4xl font-bold mb-4 text-indigo-900 dark:text-indigo-400 text-center"><i class="bi bi-person-add me-2"></i> Add Student to Your Company</h1>

    <div class="mb-4 text-center">
        <a href="{{ route('forms.create') }}" class="btn btn-success rounded-lg transition duration-300">
            <i class="bi bi-plus me-2"></i> Add Student
        </a>
    </div>

    <div class="card bg-white dark:bg-gray-800 rounded-3xl shadow-lg border border-gray-200 dark:border-gray-700 overflow-x-auto">
        <div class="card-body p-6">
            <table class="table table-borderless table-hover table-striped w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 align-middle">
                <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th class="px-4 py-2 text-lg font-medium"><i class="bi bi-person me-2"></i> First Name</th>
                        <th class="px-4 py-2 text-lg font-medium"><i class="bi bi-person me-2"></i> Last Name</th>
                        <th class="px-4 py-2 text-lg font-medium"><i class="bi bi-list-ol me-2"></i> Matric Number</th>
                        <th class="px-4 py-2 text-lg font-medium"><i class="bi bi-building me-2"></i> School Name</th>
                        <th class="px-4 py-2 text-lg font-medium"><i class="bi bi-telephone me-2"></i> Phone Number</th>
                        <th class="px-4 py-2 text-lg font-medium"><i class="bi bi-house-door me-2"></i> Address</th>
                        <th class="px-4 py-2 text-lg font-medium text-center"><i class="bi bi-gear me-2"></i> Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($student_forms as $student_form)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-700 transition duration-300">
                            <td class="px-4 py-2 align-middle">{{ $student_form->firstname }}</td>
                            <td class="px-4 py-2 align-middle">{{ $student_form->lastname }}</td>
                            <td class="px-4 py-2 align-middle">{{ $student_form->matric_number }}</td>
                            <td class="px-4 py-2 align-middle">{{ $student_form->school_name }}</td>
                            <td class="px-4 py-2 align-middle">{{ $student_form->phone_number }}</td>
                            <td class="px-4 py-2 align-middle">{{ $student_form->address }}</td>
                            <td class="px-4 py-2 text-center align-middle">
                                <form action="{{ route('forms.destroy', $student_form->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger rounded-lg transition duration-300" onclick="return confirm('Are you sure you want to delete this student?')">
                                        <i class="bi bi-trash me-1"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-4 text-center">
        <a href="{{ route('company.dashboard') }}" class="btn btn-secondary rounded-lg transition duration-300">
            <i class="bi bi-arrow-left-circle me-2"></i> Back to Company Page
        </a>
    </div>
</div>

<x-footer></x-footer>
