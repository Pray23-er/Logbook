<x-head>

</x-head>

<x-header>


</x-header>

@vite('resources/css/app.css')

<div class="container-fluid bg-light dark:bg-dark min-vh-100 py-5 px-4">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <h1 class="text-3xl font-bold mb-5 text-gray-800 dark:text-white text-center">SIWES Calendar</h1>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                @foreach($events as $event)
                    <div class="col">
                        <div class="card bg-white dark:bg-gray-700 rounded-lg shadow-md h-100">
                            <div class="card-body">
                                <h2 class="card-title text-xl font-semibold mb-2 text-gray-800 dark:text-gray-100">{{ $event->title }}</h2>
                                <div class="text-gray-600 dark:text-gray-300">
                                    <p><i class="fas fa-calendar-alt me-2"></i> Start Date: {{ \Carbon\Carbon::parse($event->start_date)->format('F j, Y') }}</p>
                                    <p><i class="fas fa-calendar-check me-2"></i> End Date: {{ \Carbon\Carbon::parse($event->end_date)->format('F j, Y') }}</p>
                                    <p>
                                        <i class="fas fa-clock me-2"></i> Days Left:
                                        @if (\Carbon\Carbon::parse($event->end_date)->isPast())
                                            <span class="text-gray-500 dark:text-gray-400">Event Ended</span>
                                        @else
                                            <span class="font-medium {{ \Carbon\Carbon::parse($event->end_date)->diffInDays(\Carbon\Carbon::now()) <= 7 ? 'text-danger' : '' }}">
                                                {{ \Carbon\Carbon::parse($event->end_date)->diffInDays(\Carbon\Carbon::now()) }}
                                            </span>
                                        @endif
                                    </p>
                                </div>
                            </div>
                            <div class="card-footer bg-gray-50 dark:bg-gray-600 border-top border-gray-200 dark:border-gray-500 text-end">
                                <form action="{{ route('school.calendar.delete', $event->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash-alt me-2"></i> Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="card mt-5 shadow">
                <div class="card-header bg-secondary text-white">
                    <h2 class="card-title text-2xl font-semibold text-center">{{ __('Create New SIWES Calendar') }}</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('school.calendar.store') }}" method="POST" class="row g-3">
                        @csrf

                        <div class="col-12">
                            <label for="title" class="form-label">Event Title:</label>
                            <input type="text" id="title" name="title" class="form-control" required>
                        </div>

                        <div class="col-md-6">
                            <label for="start_date" class="form-label">Start Date:</label>
                            <input type="date" id="start_date" name="start_date" class="form-control" required>
                        </div>

                        <div class="col-md-6">
                            <label for="end_date" class="form-label">End Date:</label>
                            <input type="date" id="end_date" name="end_date" class="form-control" required>
                        </div>

                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary">Create Event</button>
                        </div>
                    </form>
                </div>
            </div>



            <div class="mt-4 text-center">
                <a href="{{ route('school.dashboard') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left me-2"></i> Back to Dashboard
                </a>
            </div>
        </div>
    </div>
</div>

<script src="https://kit.fontawesome.com/your-font-awesome-kit.js" crossorigin="anonymous"></script>

<x-footer>

</x-footer>
