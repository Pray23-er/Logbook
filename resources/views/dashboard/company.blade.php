


<x-layout>

    <h3 style="color: green">
        Company page
    </h3>
<div style="display: flex; flex-direction:row; justify-content:space-between; flex:1;">
    <button> <a href="{{ route('company.dashboard') }}"> View Student list </a> </button>
    <button> <a href="{{ route('company.dashboard') }}">  View Logbook records </a> </button>
    <button> <a href="{{ route('company.dashboard') }}">  Approval Records </a> </button>

</div>

<div>
    <button> <a href=""></a> ADD STUDENT</button>
</div>
<style>
    button{
        background-color: green;
        color: white;
        height: 30px;
    }
</style>

    </x-layout>


