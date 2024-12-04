

<x-layout>
    {{-- Header --}}
    <div class="flex justify-between items-center bg-gray-800 text-white p-4">
        <h1 class="text-3xl font-bold">Student Dashboard</h1>
        <ul class="flex items-center">
            <li class="mr-6">
                <a href="{{ route('profiles.student') }}" class="text-white hover:text-gray-400">
                    Profile
                </a>
            </li>
            <li>
                <a href="{{ route('student.password.edit') }}" class="text-white hover:text-gray-400">
                    Settings
                </a>
            </li>
        </ul>
    </div>

    {{-- Main Content --}}
    <div class="flex flex-1 p-4">
        {{-- Sidebar --}}
        <div class="w-64 bg-gray-200 p-4 mr-4">
            <h2 class="text-lg font-bold mb-4">Navigation</h2>
            <ul>
                @if($companyFormFilled && $companyFormApproved)
                    <li class="mb-2">
                        <a href="{{ route('records.index') }}" class="text-gray-600 hover:text-gray-800">
                            Add Logbook Records
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('student.dashboard') }}" class="text-gray-600 hover:text-gray-800">
                            View Logbook Records
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('student.dashboard') }}" class="text-gray-600 hover:text-gray-800">
                            View Approval
                        </a>
                    </li>
                @else
                    <li class="mb-2">
                        <a href="{{ route('companyform.store') }}" class="text-gray-600 hover:text-gray-800">
                            Fill Company Form
                        </a>
                    </li>
                @endif
            </ul>
        </div>

        {{-- Dashboard Cards --}}
        <div class="flex-1">
            <div class="flex flex-row justify-between mb-4">
                {{-- Logbook Records --}}
                <div class="bg-blue-500 text-white rounded-lg p-4 w-1/4">
                    <h3 class="text-lg font-bold mb-2">Logbook Records</h3>
                    <p class="text-lg">{{ $logbookRecordsCount }} records</p>
                </div>
                {{-- Approved Records --}}
                <div class="bg-green-500 text-white rounded-lg p-4 w-1/4">
                    <h3 class="text-lg font-bold mb-2">Approved Records</h3>
                    <p class="text-lg">{{ $approvedRecordsCount }} records</p>
                </div>
                {{-- Pending Approval --}}
                <div class="bg-yellow-500 text-white rounded-lg p-4 w-1/4">
                    <h3 class="text-lg font-bold mb-2">Pending Approval</h3>
                    <p class="text-lg">{{ $pendingApprovalCount }} records</p>
                </div>
            </div>

            {{-- Recent Logbook Records --}}
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
