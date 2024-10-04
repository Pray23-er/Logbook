<x-layout>
<h4>Create Records</h4>

<form action="/records" method="POST">
@csrf
<div>
    <label> Title </label>
    <input type="text" name="title">
</div>


</x-layout>
