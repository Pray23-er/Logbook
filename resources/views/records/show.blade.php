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
                <th>
                    Edited
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



</tr>




        </tbody>
    </table>
</div>
