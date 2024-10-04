


<x-layout>

    <h1 style="color: green">
        School page
    </h1>
<div style="display: flex; flex-direction:row; justify-content:space-between; flex:1;">
    <button> <a href="{{ route('school.dashboard') }}"> View Student list </a> </button>
    <button> <a href="{{ route('school.dashboard') }}">  View Logbook records </a> </button>
    <button> <a href="{{ route('school.dashboard') }}">  View approval </a> </button>

</div>

<div>
    <button> <a href="{{ route('student_register.store') }}">ADD STUDENT</a> </button>
</div>
<style>
    button{
        background-color: green;
    }
</style>

    </x-layout>


