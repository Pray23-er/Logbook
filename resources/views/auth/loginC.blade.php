<x-layout>

<h1>companys login</h1>
<form action="{{ route('company.login.store') }}" method="POST">
@csrf
<b><label>Email</label></b> <br>
<input type="email" name="email">
</div>
@error('email')
<span  style="color: red">{{ $message }}</span>
@enderror
<div>
<b><label>password</label></b> <br>
<input type="password" name="password">
</div>
@error('password')
<span  style="color: red">{{ $message }}</span>
@enderror

<input type="submit">
</form>

</x-layout>
