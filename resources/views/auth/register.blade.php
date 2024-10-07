<x-layout>

<h1>REGISTER</h1>
    <form action="{{ route('register.store') }}" method="POST">
         {{-- @if ($errors->any())
             @foreach ($errors->all() as $error)
              <span class="text-red-500"> {{ $error }} </span>

             @endforeach

            @endif --}}
        @csrf
        <div>
            <b><label>Name</label></b> <br>
            <input type="text" name="name">
        </div>
        @error('name')
        <span  style="color: red">{{ $message }}</span>
        @enderror

        <div>
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
        <div>
            <b><label>Password Confirmation</label></b> <br>
            <input type="password" name="password_confirmation">
        </div>
        @error('password_confirmation')
        <span  style="color: red">{{ $message }}</span>
        @enderror
        <br>
        <div>
            <select name="type">
                <option value="school">School</option>
                <option value="company">Company</option>
            </select>
        </div>
        @error('type')
        <span  style="color: red">{{ $message }}</span>
        @enderror <br>

        <input type="submit">
        <br>
    </form>

    

</x-layout>

