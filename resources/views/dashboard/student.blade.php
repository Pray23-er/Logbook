<x-layout>
    {{-- Header --}}
    <div class="flex justify-between items-center bg-sky-800 dark:bg-gray-900 text-white p-4">
        <h1 class="text-3xl font-bold">Student Dashboard</h1>
        <ul class="flex items-center space-x-4">
            <li><a href="{{ route('profiles.student') }}" class="text-white hover:text-sky-200 dark:hover:text-sky-400 transition duration-200">Profile</a></li>
            <li><a href="{{ route('student.password.edit') }}" class="text-white hover:text-sky-200 dark:hover:text-sky-400 transition duration-200">Settings</a></li>
        </ul>
    </div>

    <div class="min-h-screen bg-gradient-to-b from-sky-50 to-sky-100 dark:from-slate-900 dark:to-slate-800 px-4 py-16">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12">
                <h1 class="text-3xl font-bold text-sky-800 dark:text-white mb-3">Student Dashboard</h1>
                <p class="text-sky-600 dark:text-sky-400">Welcome back!</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-7xl mx-auto">

                {{-- Sidebar Navigation --}}
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 md:col-span-1">
                    <h2 class="text-xl font-bold text-sky-800 dark:text-white mb-4">Navigation</h2>
                    <ul class="space-y-2">
                        @if($companyFormFilled && $companyFormApproved)
                            <li><a href="{{ route('records.create') }}" class="text-sky-600 dark:text-sky-400 hover:text-sky-800 dark:hover:text-sky-200 transition duration-200">New Entry</a></li>
                            <li><a href="{{ route('records.index') }}" class="text-sky-600 dark:text-sky-400 hover:text-sky-800 dark:hover:text-sky-200 transition duration-200">View Logbook Records</a></li>
                            <li><a href="{{ route('student.dashboard') }}" class="text-sky-600 dark:text-sky-400 hover:text-sky-800 dark:hover:text-sky-200 transition duration-200">View Approval</a></li>
                        @else
                            <li><a href="{{ route('companyform.store') }}" class="text-sky-600 dark:text-sky-400 hover:text-sky-800 dark:hover:text-sky-200 transition duration-200">Fill Company Form</a></li>
                        @endif
                    </ul>
                </div>

                {{-- Dashboard Content (Cards and Table) --}}
                <div class="md:col-span-2">
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 mb-8">
                        <h2 class="text-2xl font-bold text-sky-800 dark:text-white mb-4">Quick Overview</h2>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div class="bg-sky-100 dark:bg-sky-700 text-sky-800 dark:text-white rounded-lg p-4 hover:bg-sky-200 dark:hover:bg-sky-600 transition duration-300">
                                <h3 class="text-lg font-bold mb-2">Logbook Records</h3>
                                <p class="text-xl">{{ $logbookRecordsCount }}</p>
                                <span class="text-sm">Total entries</span>
                            </div>
                            <div class="bg-green-100 dark:bg-green-700 text-green-800 dark:text-white rounded-lg p-4 hover:bg-green-200 dark:hover:bg-green-600 transition duration-300">
                                <h3 class="text-lg font-bold mb-2">Approved Records</h3>
                                <p class="text-xl">{{ $approvedRecordsCount }}</p>
                                <span class="text-sm">Approved entries</span>
                            </div>
                            <div class="bg-yellow-100 dark:bg-yellow-700 text-yellow-800 dark:text-white rounded-lg p-4 hover:bg-yellow-200 dark:hover:bg-yellow-600 transition duration-300">
                                <h3 class="text-lg font-bold mb-2">Pending Approval</h3>
                                <p class="text-xl">{{ $pendingApprovalCount }}</p>
                                <span class="text-sm">Pending entries</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
                        <h2 class="text-2xl font-bold text-sky-800 dark:text-white mb-4">Recent Logbook Entries</h2>
                        <input type="text" id="searchRecords" class="border rounded p-2 mb-2 w-full dark:bg-gray-700 dark:border-gray-600 dark:text-white" placeholder="Search records...">
                        <table class="table-auto w-full mb-4 text-sky-600 dark:text-sky-400" id="recordsTable">
                            <thead class="bg-sky-100 dark:bg-sky-700 text-sky-800 dark:text-white">
                                <tr>
                                    <th class="px-4 py-2 text-left">Title</th>
                                    <th class="px-4 py-2 text-left">Description</th>
                                    <th class="px-4 py-2 text-left">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($recentLogbookRecords as $record)
                                <tr class="border-b border-gray-200 dark:border-gray-700 hover:bg-sky-50 dark:hover:bg-gray-700">
                                    <td class="px-4 py-2">{{ $record->title }}</td>
                                    <td class="px-4 py-2">{{ $record->description }}</td>
                                    <td class="px-4 py-2">
                                        {{-- ORIGINAL STATUS LOGIC --}}
                                        @if ($record->is_approved)
                                            <span class="text-green-500">Approved</span>
                                        @else
                                            <span class="text-red-500">Rejected</span> {{-- Or whatever your "rejected" status is --}}
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const searchInput = document.getElementById('searchRecords');
        const tableRows = document.querySelectorAll('#recordsTable tbody tr');

        searchInput.addEventListener('keyup', function(event) {
            const searchTerm = event.target.value.toLowerCase();

            tableRows.forEach(row => {
                const title = row.cells[0].textContent.toLowerCase();
                const description = row.cells[1].textContent.toLowerCase();

                if (title.includes(searchTerm) || description.includes(searchTerm)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    </script>

</x-layout>
