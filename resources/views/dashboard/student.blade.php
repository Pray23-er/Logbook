


<x-layout>

    <h1 style="color: green">
        Student page
    </h1>
  
<div style="display: flex; flex-direction:row; justify-content:space-between; flex:1;">
    <button> <a href="{{ route('records.index') }}"> Add logbook records</a> </button>
    <button> <a href="{{ route('student.dashboard') }}">  View Logbook records </a> </button>
    <button> <a href="{{ route('student.dashboard') }}">  View approval </a> </button>
    <button><a href="{{ route('companyform.store') }}">fill company form</a></button>
</div>

<style>
    button{
        background-color: green;
    }
</style>

    </x-layout>


