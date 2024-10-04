
<x-layout>
<form method="POST" action="{{ route('student_login.store') }}">
    @csrf
    <label>Matric Number</label>
    <input type="text" name="matric_number" required minlength="6" placeholder="Enter Matric Number">
    @error('matric_number')
        <span style="color: red">{{ $message }}</span>
    @enderror
    <br>
    <label>Password</label>
    <input type="password" name="password" required minlength="8" placeholder="Enter Password">
    @error('password')
        <span style="color: red">{{ $message }}</span>
    @enderror
    <br>
    <button type="submit" class="btn btn-primary">Login</button>
</form>
</x-layout>
