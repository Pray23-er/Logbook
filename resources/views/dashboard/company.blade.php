


<x-layout>

    <h3 style="color: green">

    </h3>

    <div class="mt-4">
        <h1 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $company->name }}</h1>
    </div>

<div style="display: flex; flex-direction:row; justify-content:space-between; flex:1;">
    <button> <a href="{{ route('company.dashboard') }}"> View Student list </a> </button>
    <button> <a href="{{ route('company.dashboard') }}">  View Logbook records </a> </button>
    <button> <a href="{{ route('company.dashboard') }}">  Approval Records </a> </button>

</div>

<div>
    <button> <a href="{{ route('forms.index') }}"> ADD STUDENT</a></button>
</div>
<style>
    button{
        background-color: green;
        color: white;
        height: 30px;
    }
</style>

<!-- resources/views/companies/show.blade.php -->

<!-- resources/views/dashboard/company.blade.php -->

<h2>Logbook Records</h2>
<ul>
    @foreach($company->logbooks as $logbook)
        <li>
            {{ $logbook->title }} - {{ $logbook->description }}
            (Filled by: {{ $logbook->student->matric_number }})
        </li>
    @endforeach
</ul>

    </x-layout>


