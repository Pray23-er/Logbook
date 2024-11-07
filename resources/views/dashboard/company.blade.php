<x-layout>
    <h3 style="color: green"></h3>

    <div class="flex">
        <!-- Fixed Sidebar -->
        <div class="fixed top-0 left-0 h-screen w-64 bg-gray-100 p-4 shadow-md">
            <h2 class="mb-4">Dashboard</h2>
            <ul>
                <li class="mb-4">
                    <a href="{{ route('company.dashboard') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">View Student List</a>
                </li>
                <li class="mb-4">
                    <a href="{{ route('company.dashboard') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">View Logbook Records</a>
                </li>
                <li class="mb-4">
                    <a href="{{ route('company.dashboard') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Approval Records</a>
                </li>
                <li class="mb-4">
                    <a href="{{ route('forms.index') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Add Student</a>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="ml-64 p-4">
            <div class="mt-4">
                <h1 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $company->name }}</h1>
            </div>

            <!-- Logbook Records Table -->
            <div class="overflow-x-auto mt-8">
                <h2 class="mb-4">Logbook Records</h2>
                <table class="table-auto w-full text-left">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="px-4 py-2">Title</th>
                            <th class="px-4 py-2">Description</th>
                            <th class="px-4 py-2">Filled By</th>
                            <th class="px-4 py-2">Student Name</th>
                            <th class="px-4 py-2">Status</th>
                            <th class="px-4 py-2">Actions</th>
                            <th class="px-4 py-2">Created on</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($company->logbooks as $logbook)
                            <tr class="border-b">
                                <td class="px-4 py-2">{{ $logbook->title }}</td>
                                <td class="px-4 py-2">{{ $logbook->description }}</td>
                                <td class="px-4 py-2">{{ $logbook->matric_number }}</td>
                                <td class="px-4 py-2">{{ $logbook->student->firstname }} {{ $logbook->student->lastname }}</td>
                                <td class="px-4 py-2">
                                    @if($logbook->status == 'approved')
                                        <span class="bg-green-200 text-green-600 py-1 px-2 rounded">Approved</span>
                                    @elseif($logbook->status == 'pending')
                                        <span class="bg-yellow-200 text-yellow-600 py-1 px-2 rounded">Pending</span>
                                    @elseif($logbook->status == 'rejected')
                                        <span class="bg-red-200 text-red-600 py-1 px-2 rounded">Rejected</span>
                                    @endif
                                </td>
                                <td class="px-4 py-2">
                                    @if($logbook->status == 'pending')
                                        <form action="{{ route('logbook.approve', $logbook->id) }}" method="POST">
                                            @csrf
                                            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Approve</button>
                                        </form>
                                        <form action="{{ route('logbook.reject', $logbook->id) }}" method="POST">
                                            @csrf
                                            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Reject</button>
                                        </form>
                                    @elseif($logbook->status == 'approved')
                                        <form action="{{ route('logbook.reject', $logbook->id) }}" method="POST">
                                            @csrf
                                            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Reject</button>
                                        </form>
                                        @elseif($logbook->status == 'rejected')
                                        <form action="{{ route('logbook.approve', $logbook->id) }}" method="POST">
                                            @csrf
                                            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Approve</button>
                                        </form>
                                    @endif
                                </td>
                                <td class="px-4 py-2">{{ $logbook->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layout>
