<x-head></x-head>
<x-header></x-header>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <!-- Card Header -->
                <div class="card-header bg-primary text-white">
                    {{ __('Logbook Records') }}
                </div>

                <!-- Card Body -->
                <div class="card-body">
                    <div id="logbook-list">
                        <!-- Logbook Record Heading -->
                        <h2 class="h4 mb-4"><i class="bi bi-journal"></i> Logbook Record</h2>

                        <!-- Student List -->
                        <ul class="list-unstyled">
                            @foreach($registeredStudents as $student)
                                <li class="mb-2">
                                    <a href="?matric_number={{ $student->matric_number }}" class="text-primary fw-bold">
                                        {{ $student->firstname }} {{ $student->lastname }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>

                        <!-- Selected Student's Logbook -->
                        @if(isset($selectedStudent) && isset($studentLogbooks))
                            <div class="card mt-4 shadow">
                                <!-- Selected Student's Logbook Header -->
                                <div class="card-header bg-secondary text-white">
                                    {{ $selectedStudent->firstname }} {{ $selectedStudent->lastname }}'s Logbook
                                </div>

                                <!-- Logbook Table -->
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover table-bordered w-100">
                                            <thead class="table-light">
                                                <tr>
                                                    <th scope="col"><i class="bi bi-card-text"></i> Title</th>
                                                    <th scope="col"><i class="bi bi-chat-left-text"></i> Description</th>
                                                    <th scope="col"><i class="bi bi-calendar"></i> Created At</th>
                                                    <th scope="col"><i class="bi bi-check2-circle"></i> Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($studentLogbooks as $logbook)
                                                    <tr>
                                                        <td>{{ $logbook->title }}</td>
                                                        <td>{{ $logbook->description }}</td>
                                                        <td>{{ $logbook->created_at }}</td>
                                                        <td>
                                                            <span class="badge rounded-pill bg-{{ $logbook->status == 'pending' ? 'warning text-dark' : ($logbook->status == 'approved' ? 'success' : 'danger') }}">
                                                                <i class="bi bi-{{ $logbook->status == 'pending' ? 'hourglass' : ($logbook->status == 'approved' ? 'check2-circle' : 'x-circle') }}"></i>
                                                                {{ ucfirst($logbook->status) }}
                                                            </span>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Back to Dashboard Button -->
    <div class="d-flex justify-content-center mt-4">
        <a href="{{ route('school.dashboard') }}" class="btn btn-primary">
            <i class="bi bi-arrow-left-circle"></i> Back to Dashboard
        </a>
    </div>
</div>

<x-footer></x-footer>
