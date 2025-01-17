<!-- resources/views/logbook.blade.php -->


<x-head>
</x-head>


<x-header>
</x-header>


@vite('resources/css/app.css')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Logbook Records') }}</div>

                <div class="card-body">
                    <div id="logbook-list" class="mt-4">
                        <h2 class="text-lg font-bold mb-4"><i class="bi bi-journal"></i> Logbook Record</h2>

                        <ul class="space-y-2">
                            @foreach($registeredStudents as $student)
                            <li>
                                <a href="?matric_number={{ $student->matric_number }}" class="text-blue-600 hover:text-blue-900">{{ $student->firstname }} {{ $student->lastname }}</a>
                            </li>
                            @endforeach
                        </ul>

                        @if(isset($selectedStudent) && isset($studentLogbooks))
                        <div class="bg-gray-100 p-4 mt-4 border border-gray-300 rounded shadow">
                            <h2 class="text-2xl font-bold mb-4">{{ $selectedStudent->firstname }} {{ $selectedStudent->lastname }}'s Logbook</h2>
                            <div class="overflow-x-auto">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                <i class="bi bi-card-text"></i> Title
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                <i class="bi bi-chat-left-text"> Description</i>
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                <i class="bi bi-chat-left-text"> Created At</i>
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                <i class="bi bi-check2-circle"></i> Status
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach($studentLogbooks as $logbook)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $logbook->title }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $logbook->description }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $logbook->created_at }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-md text-xs font-medium leading-4">
                                                    @if ($logbook->status == 'pending')
                                                    <span class="bg-yellow-100 text-yellow-800"><i class="bi bi-hourglass"></i> Pending</span>
                                                    @elseif ($logbook->status == 'approved')
                                                    <span class="bg-green-100 text-green-800"><i class="bi bi-check2-circle"></i> Approved</span>
                                                    @else
                                                    <span class="bg-red-100 text-red-800"><i class="bi bi-x-circle"></i> Rejected</span>
                                                    @endif
                                                </span>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="flex justify-center mb-4 mt-4">
    <a href="{{ route('school.dashboard') }}"><button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><i class="bi bi-arrow-left-circle"></i> Back to Dashboard</button></a>
</div>

<x-footer>

</x-footer>
