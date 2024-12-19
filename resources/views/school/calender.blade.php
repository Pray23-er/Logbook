<x-layout>
    <div class="bg-gray-100 dark:bg-gray-800 min-h-screen py-12 px-4 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-3xl font-bold mb-8 text-gray-800 dark:text-white text-center">SIWES Calendar</h1>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($events as $event)
                    <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md overflow-hidden">
                        <div class="p-6">
                            <h2 class="text-xl font-semibold mb-2 text-gray-800 dark:text-gray-100">{{ $event->title }}</h2>
                            <div class="text-gray-600 dark:text-gray-300 space-y-1">
                                <p><i class="fas fa-calendar-alt mr-2"></i> Start Date: {{ \Carbon\Carbon::parse($event->start_date)->format('F j, Y') }}</p>
                                <p><i class="fas fa-calendar-check mr-2"></i> End Date: {{ \Carbon\Carbon::parse($event->end_date)->format('F j, Y') }}</p>
                                <p>
                                    <i class="fas fa-clock mr-2"></i> Days Left:
                                    @if (\Carbon\Carbon::parse($event->end_date)->isPast())
                                        <span class="text-gray-500 dark:text-gray-400">Event Ended</span>
                                    @else
                                        <span class="font-medium {{ \Carbon\Carbon::parse($event->end_date)->diffInDays(\Carbon\Carbon::now()) <= 7 ? 'text-red-500 dark:text-red-400' : '' }}">
                                            {{ \Carbon\Carbon::parse($event->end_date)->diffInDays(\Carbon\Carbon::now()) }}
                                        </span>
                                    @endif
                                </p>
                            </div>
                        </div>
                        <div class="bg-gray-50 dark:bg-gray-600 px-6 py-3 flex justify-end items-center border-t border-gray-200 dark:border-gray-500">
                            <form action="{{ route('school.calendar.delete', $event->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 dark:text-red-400 hover:text-red-800 dark:hover:text-red-200 transition duration-200">
                                    <i class="fas fa-trash-alt mr-2"></i> Delete
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-12 bg-white dark:bg-gray-700 rounded-lg shadow-md p-6">
                <h2 class="text-2xl font-semibold mb-6 text-gray-800 dark:text-gray-100 text-center">Create New SIWES Calendar</h2>

                <form action="{{ route('school.calendar.store') }}" method="POST" class="space-y-6">
                    @csrf

                    <div class="form-group">
                        <label for="title" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Event Title:</label>
                        <input type="text" id="title" name="title"
                               class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-500 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-gray-600 dark:text-gray-100 dark:focus:ring-indigo-700 px-4 py-2">
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="form-group">
                            <label for="start_date" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Start Date:</label>
                            <input type="date" id="start_date" name="start_date"
                                   class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-500 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-gray-600 dark:text-gray-100 dark:focus:ring-indigo-700 px-4 py-2">
                        </div>
                        <div class="form-group">
                            <label for="end_date" class="block text-sm font-medium text-gray-700 dark:text-gray-300">End Date:</label>
                            <input type="date" id="end_date" name="end_date"
                                   class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-500 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-gray-600 dark:text-gray-100 dark:focus:ring-indigo-700 px-4 py-2">
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit"
                                class="inline-flex justify-center py-2 px-6 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:bg-indigo-500 dark:hover:bg-indigo-600 dark:focus:ring-indigo-800">
                            Create Event
                        </button>
                    </div>
                </form>
            </div>

            <div class="mt-6 text-center">
                <a href="{{ route('school.dashboard') }}" class="text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-200 transition duration-200 font-medium">
                    <i class="fas fa-arrow-left mr-2"></i> Back to Dashboard
                </a>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/your-font-awesome-kit.js" crossorigin="anonymous"></script>
</x-layout>
