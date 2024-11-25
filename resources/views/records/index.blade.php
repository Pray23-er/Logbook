<x-layout>
<h1>logbook record</h1>

<br>
<div>
    <a href="{{ route('records.create') }}"><button>CREATE</button></a>
</div>


<div class="bg-green-500">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Title
                </th>


                <th scope="col" class="px-6 py-3">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
@foreach ($logbooks as $logbook )
<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

    <td class="px-6 py-4">
        {{ $logbook->title }}
    </td>


   <td>
        <div class="flex justify-between">
        <a href="{{ route('records.show',$logbook->id) }}"><button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">VIEW</button></a>
        </div>
   </td>


</tr>

@endforeach


        </tbody>
    </table>
</div>
<div class="mb-10">
    <a href="{{ route('student.dashboard') }}"><button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Back to Dashboard</button></a>
    </div>
</x-layout>
