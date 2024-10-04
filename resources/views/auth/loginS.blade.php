 <x-layout>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
    <h1>School login</h1>
    <form action="{{ route('school.login.store') }}" method="POST">
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

    </body>
    </html>


 </x-layout>
