<x-head>

</x-head>

<x-header>


</x-header>
@vite('resources/css/app.css')
    @if (session('success'))
      <div class="alert alert-success" role="alert">
        <svg class="h-5 w-5 text-green-700" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414 0L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4a1 1 0 000-1.414z" clip-rule="evenodd" />
        </svg>
        {{ session('success') }}
      </div>
    @endif

    <header class="bg-gray-200 text-white text-center p-4">
        <h1 class="text-2xl font-bold">{{ $company->name }}</h1>
        <i class="bi bi-building"></i>
    </header>
<br>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
      <div class="bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded relative">
        <h2 class="font-bold mb-2"><i class="bi bi-info-circle"></i> Company Information</h2>
        <p class="text-gray-600 mb-2">Name: {{ $company->name }}</p>
        <p class="text-gray-600 mb-2">Email: {{ $company->email }}</p>
      </div>

      <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
        <h2 class="font-bold mb-2"><i class="bi bi-person-badge"></i> Account Information</h2>
        <p class="text-gray-600 mb-2">Account Created: {{ $company->created_at }}</p>
        <p class="text-gray-600 mb-2">Last Updated: {{ $company->updated_at }}</p>
      </div>

      <div class="bg-gray-100 border border-gray-400 text-gray-700 px-4 py-3 rounded relative">
        <h2 class="font-bold mb-2"><i class="bi bi-gear"></i> Quick Actions</h2>
        <ul>
          <li class="mb-2">
            <a href="{{ route('company.view.student') }}" class="text-blue-600 hover:text-blue-800"><i class="bi bi-people"></i> View Student List</a>
          </li>
          <li class="mb-2">
            <a href="{{ route('forms.create') }}" class="text-blue-600 hover:text-blue-800"><i class="bi bi-plus-lg"></i> Add New Student</a>
          </li>
          <li class="mb-2">
            <a href="{{ route('company.password.edit') }}" class="text-blue-600 hover:text-blue-800"><i class="bi bi-lock"></i> Update Password</a>
          </li>
        </ul>
      </div>

      <div class="bg-gray-100 border border-gray-400 text-gray-700 px-4 py-3 rounded relative">
        <h2 class="font-bold mb-2"><i class="bi bi-journal"></i> Logbook Records</h2>
        <p class="text-gray-600 mb-2">Total Records: {{ $company->logbooks->count() }}</p>
        <a href="#" class="text-blue-600 hover:text-blue-800" onclick="showLogbookList()"><i class="bi bi-eye"></i> View All Records</a>
      </div>
    </div>

   <!-- ... -->

<div class="overflow-x-auto mt-8" id="logbook-list" style="display: none;">
    <h2 class="mb-4"><i class="bi bi-journal"></i> Logbook Records</h2>
    <table class="table-auto w-full text-left">
      <thead class="bg-gray-200">
        <tr>
          <th class="px-4 py-2 text-xs"><i class="bi bi-card-text"></i> Title</th>
          <th class="px-4 py-2 text-xs"><i class="bi bi-chat-left-text"></i> Description</th>
          <th class="px-4 py-2 text-xs"><i class="bi bi-person"></i> Student Name</th>
          <th class="px-4 py-2 text-xs"><i class="bi bi-check2-circle"></i> Status</th>
          <th class="px-4 py-2 text-xs"><i class="bi bi-gear"></i> Actions</th>
          <th class="px-4 py-2 text-xs"><i class="bi bi-calendar"></i> Created on</th>
          <th class="px-4 py-2 text-xs"><i class="bi bi-chat-left-text"></i> Feedback</th>
          <th class="px-4 py-2 text-xs"><i class="bi bi-file-earmark"></i> Uploads</th>
        </tr>
      </thead>
      <tbody>
        @foreach($company->logbooks as $logbook)
        <tr class="border-b hover:bg-gray-50">
          <td class="px-4 py-2 text-xs">{{ $logbook->title }}</td>
          <td class="px-4 py-2 text-xs">{{ $logbook->description }}</td>
          <td class="px-4 py-2 text-xs">{{ $logbook->student->firstname }} {{ $logbook->student->lastname }}</td>
          <td class="px-4 py-2 text-xs">
            @if($logbook->status == 'approved')
            <span class="bg-green-200 text-green-600 py-1 px-2 rounded"><i class="bi bi-check2-circle"></i> Approved</span>
            @elseif($logbook->status == 'pending')
            <span class="bg-yellow-200 text-yellow-600 py-1 px-2 rounded"><i class="bi bi-hourglass"></i> Pending</span>
            @elseif($logbook->status == 'rejected')
            <span class="bg-red-200 text-red-600 py-1 px-2 rounded"><i class="bi bi-x-circle"></i> Rejected</span>
            @endif
          </td>
          <td class="px-4 py-2 text-xs whitespace-nowrap">
            <div class="flex space-x-2">
              @if($logbook->status == 'pending')
              <form action="{{ route('logbook.approve', $logbook->id) }}" method="POST">
                @csrf
                <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-3 rounded text-xs"><i class="bi bi-check2-circle"></i> Approve</button>
              </form>
              <form action="{{ route('logbook.reject', $logbook->id) }}" method="POST">
                @csrf
                <textarea name="feedback" placeholder="Provide feedback" class="border rounded p-1 text-xs"></textarea>
                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded text-xs"><i class="bi bi-x-circle"></i> Reject</button>
              </form>
              @elseif($logbook->status == 'approved')
              <form action="{{ route('logbook.reject', $logbook->id) }}" method="POST">
                @csrf
                <textarea name="feedback" placeholder="Provide feedback" class="border rounded p-1 text-xs"></textarea>
                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded text-xs"><i class="bi bi-x-circle"></i> Reject</button>
              </form>
              @elseif($logbook->status == 'rejected')
              <form action="{{ route('logbook.approve', $logbook->id) }}" method="POST">
                @csrf
                <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-3 rounded text-xs"><i class="bi bi-check2-circle"></i> Approve</button>
              </form>
              @endif
            </div>
          </td>
          <td class="px-4 py-2 text-xs">{{ $logbook->created_at }}</td>
<td class="px-4 py-2 text-xs">
  @if($logbook->status == 'rejected')
  {{ $logbook->feedback }}
  @endif
</td>

<td class="px-6 py-4 text-xs">
  @if($logbook->thumbnail)
    @if(pathinfo($logbook->thumbnail, PATHINFO_EXTENSION) == 'jpg' ||
        pathinfo($logbook->thumbnail, PATHINFO_EXTENSION) == 'jpeg' ||
        pathinfo($logbook->thumbnail, PATHINFO_EXTENSION) == 'png' ||
        pathinfo($logbook->thumbnail, PATHINFO_EXTENSION) == 'gif' ||
        pathinfo($logbook->thumbnail, PATHINFO_EXTENSION) == 'svg')
      <img src="{{ $logbook->thumbnail }}" alt="Thumbnail" style="max-width: 100px; max-height: 100px;">
    @else
      @if(pathinfo($logbook->thumbnail, PATHINFO_EXTENSION) == 'pdf')
        <a href="{{ $logbook->thumbnail }}" target="_blank">
          <i class="fas fa-file-pdf"></i> View PDF
        </a>
      @elseif(pathinfo($logbook->thumbnail, PATHINFO_EXTENSION) == 'docx' || pathinfo($logbook->thumbnail, PATHINFO_EXTENSION) == 'doc')
        <a href="{{ $logbook->thumbnail }}" target="_blank">
          <i class="fas fa-file-word"></i> View Word Document
        </a>
      @elseif(pathinfo($logbook->thumbnail, PATHINFO_EXTENSION) == 'pptx' || pathinfo($logbook->thumbnail, PATHINFO_EXTENSION) == 'ppt')
        <a href="{{ $logbook->thumbnail }}" target="_blank">
          <i class="fas fa-file-powerpoint"></i> View PowerPoint Presentation
        </a>
      @elseif(pathinfo($logbook->thumbnail, PATHINFO_EXTENSION) == 'xlsx' || pathinfo($logbook->thumbnail, PATHINFO_EXTENSION) == 'xls')
        <a href="{{ $logbook->thumbnail }}" target="_blank">
          <i class="fas fa-file-excel"></i> View Excel Spreadsheet
        </a>
      @else
        <a href="{{ $logbook->thumbnail }}" target="_blank">
          <i class="fas fa-file"></i> View File
        </a>
      @endif
    @endif
  @else
    <i class="fas fa-times"></i> No thumbnail
  @endif
</td>

</tr>
@endforeach
</tbody>
</table>
</div>

<script>
function showLogbookList() {
  document.getElementById("logbook-list").style.display = "block";
}
</script>

<x-footer>

</x-footer>

