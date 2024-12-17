<!-- resources/views/school/calendar.blade.php -->

<x-layout>
    <h1 class="text-3xl font-bold mb-4">SIWES Calendar</h1>
<!-- resources/views/school/calendar.blade.php -->



    <div class="flex flex-wrap -mx-4">
        @foreach($events as $event)
            <div class="w-full md:w-1/2 xl:w-1/3 p-4">
                <div class="bg-white rounded-lg shadow-md p-4">
                    <h2 class="text-xl font-bold mb-2">{{ $event->title }}</h2>
                    <p class="text-gray-600 mb-2">Start Date: {{ $event->start_date }}</p>
                    <p class="text-gray-600 mb-2">End Date: {{ $event->end_date }}</p>
                    <p class="text-gray-600 mb-2">Days Left: {{ max(0, (\Carbon\Carbon::parse($event->end_date)->timestamp - \Carbon\Carbon::now()->timestamp) / 86400) }}</p>
                    <div class="flex justify-end">
                        <form action="{{ route('school.calendar.delete', $event->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-indigo-600 hover:text-indigo-900">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <!-- Create new event form -->
    <div class="mt-6">
        <h2 class="text-2xl font-bold mb-4">Create New Siwes Calender</h2>

        <form action="{{ route('school.calendar.store') }}" method="POST">
            @csrf

            <div class="flex flex-col mb-4">
                <label for="title" class="text-sm font-medium text-gray-700">Event Title:</label>
                <input type="text" id="title" name="title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            </div>

            <div class="flex flex-col mb-4">
                <label for="start_date" class="text-sm font-medium text-gray-700">Start Date:</label>
                <input type="date" id="start_date" name="start_date" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            </div>

            <div class="flex flex-col mb-4">
                <label for="end_date" class="text-sm font-medium text-gray-700">End Date:</label>
                <input type="date" id="end_date" name="end_date" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            </div>

            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Create Event</button>
        </form>
    </div>
    <div class="flex justify-end mt-6">
        <a href="{{ route('school.dashboard') }}">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Back to Dashboard
            </button>
        </a>
    </div>
</x-layout>
