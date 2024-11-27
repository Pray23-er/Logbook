<x-layout>
    @if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <svg class="h-5 w-5 text-green-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414 0L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4a1 1 0 000-1.414z" clip-rule="evenodd" />
        </svg>
        {{ session('success') }}
    </div>
@endif
    <div class="flex h-screen">

        <div class="w-64 bg-gray-800 text-white p-4">
            <h2 class="text-lg font-bold mb-4">Dashboard</h2>
            <ul>
                <li class="mb-2">
                    <a href="{{ route('records.index') }}" class="text-white hover:text-gray-400">
                        Add logbook records
                    </a>
                </li>
                <li class="mb-2">
                    <a href="{{ route('student.dashboard') }}" class="text-white hover:text-gray-400">
                        View Logbook records
                    </a>
                </li>
                <li class="mb-2">
                    <a href="{{ route('student.dashboard') }}" class="text-white hover:text-gray-400">
                        View approval
                    </a>
                </li>
                <li class="mb-2">
                    <a href="{{ route('companyform.store') }}" class="text-white hover:text-gray-400">
                        Fill company form
                    </a>
                </li>
                <li class="mb-2">
                    <a href="{{ route('profiles.student') }}" class="text-white hover:text-gray-400">
                        Profile
                    </a>
                </li>
                <ul>
                    <li class="mb-2">
                        <a href="{{ route('student.password.edit') }}" class="text-white hover:text-gray-400">
                            Change password
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('profiles.student') }}" class="text-white hover:text-gray-400">
                            Profile Settings
                        </a>
                    </li>
                </ul>
            </ul>
        </div>
        <div class="flex-1 p-4">
            <h1 class="text-3xl font-bold mb-4" style="color: green">
                Welcome, {{ auth('student')->user()->firstname }} {{ auth('student')->user()->lastname }}!
            </h1>

<div class="flex flex-col mb-4">
    <h2 class="text-2xl font-bold mb-2">Overview</h2>
    <div class="flex flex-row justify-between mb-4">
        <div class="bg-blue-500 text-white rounded-lg p-4 w-1/4">
            <h3 class="text-lg font-bold mb-2">Logbook Records</h3>
            <p class="text-lg">{{ $logbookRecordsCount }} records</p>
        </div>
        <div class="bg-green-500 text-white rounded-lg p-4 w-1/4">
            <h3 class="text-lg font-bold mb-2">Approved Records</h3>
            <p class="text-lg">{{ $approvedRecordsCount }} records</p>
        </div>
        <div class="bg-yellow-500 text-white rounded-lg p-4 w-1/4">
            <h3 class="text-lg font-bold mb-2">Pending Approval</h3>
            <p class="text-lg">{{ $pendingApprovalCount }} records</p>
        </div>
    </div>
</div>
<div class="flex flex-col mb-4 bg-white rounded-lg shadow-md p-4">
    <h2 class="text-2xl font-bold mb-2 text-gray-600">Recent Logbook Records</h2>
    <table class="table-auto w-full mb-4 text-gray-600">
        <thead class="bg-gray-200">
            <tr>
                <th class="px-4 py-2 text-left">Title</th>
                <th class="px-4 py-2 text-left">Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach($recentLogbookRecords as $record)
            <tr class="border-b border-gray-200 hover:bg-gray-100">
                <td class="px-4 py-2">{{ $record->title }}</td>
                <td class="px-4 py-2">{{ $record->description }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
        </div>
    </div>

</x-layout>
