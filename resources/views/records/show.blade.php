<x-layout>
Display Record

</x-layout>
<div class="bg-green-500">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Title
                </th>


                <th scope="col" class="px-6 py-3">
                    Description
                </th>

                <th scope="col" class="px-6 py-3">
                    Created on
                </th>
                <th scope="col" class="px-6 py-3">
                    Actions
                </th>
                <th scope="col" class="px-6 py-3">
                    Edited
                </th>
                <th scope="col" class="px-6 py-3">
                    Status
                </th>
            </tr>
        </thead>
        <tbody>

<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

    <td class="px-6 py-4">
        {{ $logbook->title }}
    </td>
    <td class="px-6 py-4">
        {{ $logbook->description }}
    </td>
    <td class="px-6 py-4">
        {{ $logbook->created_at }}
    </td>


   <td>
    <a href="{{ route('records.edit',  $logbook->id) }}" class="inline-block">
        <button type="button" class="bg-green-700 hover:bg-green-800 text-white font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700">
            EDIT
        </button>
    </a>

    <form action="{{ route('records.destroy',  $logbook->id) }}" method="POST" class="inline-block">
        @csrf
        @method('DELETE')
        <button type="submit" class="bg-red-700 hover:bg-red-800 text-white font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700">
            DELETE
        </button>
    </form>
   </td>

   <td class="px-6 py-4">
    {{ $logbook->updated_at }}
</td>
<td class="px-6 py-4">
    @if($logbook->status == 'pending')
        <span class="bg-yellow-200 text-yellow-600 py-1 px-2 rounded">Pending</span>
    @elseif($logbook->status == 'approved')
        <span class="bg-green-200 text-green-600 py-1 px-2 rounded">Approved</span>
    @elseif($logbook->status == 'rejected')
        <span class="bg-red-200 text-red-600 py-1 px-2 rounded">Rejected</span>
    @endif
</td>



</tr>




        </tbody>
    </table>
</div>
<div class="mb-5 max-w-2xl mx-auto p-4">
    <a href="{{ route('records.index') }}"><button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Home</button></a>
    </div>
