<x-head></x-head>

<x-header></x-header>
@vite('resources/css/app.css')

    <form action="/companyform" method="POST" class="max-w-md mx-auto p-4 bg-white rounded-lg shadow-md">
        @csrf
        <div class="mb-4">
            <label for="companyname" class="block text-gray-700 text-sm font-bold mb-2">Company Name</label>
            <input type="text" name="companyname" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('companyname')
            <span class="text-red-500 text-xs italic">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="Company_phone_number" class="block text-gray-700 text-sm font-bold mb-2">Company Phone Number</label>
            <input type="text" name="Company_phone_number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('Company_phone_number')
            <span class="text-red-500 text-xs italic">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="Company_email" class="block text-gray-700 text-sm font-bold mb-2">Company Email</label>
            <input type="text" name="Company_email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('Company_email')
            <span class="text-red-500 text-xs italic">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="matric_number" class="block text-gray-700 text-sm font-bold mb-2">Matric Number</label>
            <input type="text" name="matric_number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('matric_number')
            <span class="text-red-500 text-xs italic">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="Added_by" class="block text-gray-700 text-sm font-bold mb-2">Added By</label>
            <input type="text" name="Added_by" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('Added_by')
            <span class="text-red-500 text-xs italic">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex items-center justify-between">
            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Submit
            </button>
        </div>
    </form>

<x-footer></x-footer>
