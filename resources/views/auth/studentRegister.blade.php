<x-layout>

    <h1>REGISTER</h1>
        <form action="{{ route('student_register.store') }}" method="POST">
             {{-- @if ($errors->any())
                 @foreach ($errors->all() as $error)
                  <span class="text-red-500"> {{ $error }} </span>

                 @endforeach

                @endif --}}
            @csrf
            <div>
                <b><label>First Name</label></b> <br>
                <input type="text" name="firstname">
            </div>
            @error('firstname')
            <span  style="color: red">{{ $message }}</span>
            @enderror

            <div>
                <b><label>Last Name</label></b> <br>
                <input type="text" name="lastname">
            </div>
            @error('lastname')
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
                <b><label>Matric Number</label></b> <br>
                <input type="text" name="matric_number">
            </div>
            @error('matric_number')
            <span  style="color: red">{{ $message }}</span>
            @enderror


            <div>
                <b><label>Year</label></b> <br>
                <input type="date-time-local" name="year">
            </div>
            @error('year')
            <span  style="color: red">{{ $message }}</span>
            @enderror

            <div>
                <b><label>level</label></b> <br>
                <input type="text" name="level">
            </div>
            @error('level')
            <span  style="color: red">{{ $message }}</span>
            @enderror

            <div>
                <b><label>Course of Study</label></b> <br>
                <input type="text" name="course_of_study">
            </div>
            @error('course_of_study')
            <span  style="color: red">{{ $message }}</span>
            @enderror


        <div>
            <b><label>School ID</label></b> <br>
            <input type="text" name="school_id">
        </div>
        @error('school_id')
        <span style="color: red">{{ $message }}</span>
        @enderror

            <div>
                <b><label>Phone Number</label></b> <br>
                <input type="text" name="phone_number">
            </div>
            @error('phone_number')
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


            <input type="submit">
            <br>
        </form>
        <br>
        <a href="{{ route('school.dashboard') }}"> Back to School Page</a>

    </x-layout>

