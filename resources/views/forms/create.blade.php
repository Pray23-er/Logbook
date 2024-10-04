


<x-layout>
    Add a student to your company
    <form action="/forms"  method="POST">
    @csrf
        <div>
            <b><label>First Name</label></b> <br>
            <input type="text" name="firstname">
        </div>
        @error('firstname')
        <span  style="color: red">{{ $message }}</span>
        @enderror
        <div>
            <b><label>Last name</label></b> <br>
            <input type="text" name="lastname">
        </div>
        @error('lastname')
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
            <b><label>School name</label></b> <br>
            <input type="text" name="school_name">
        </div>
        @error('school_name')
        <span  style="color: red">{{ $message }}</span>
        @enderror


        <div>
            <b><label>Phone Number</label></b> <br>
            <input type="text" name="phone_number">
        </div>
        @error('phone_number')
        <span  style="color: red">{{ $message }}</span>
        @enderror

        <div>
            <b><label>Address</label></b> <br>
            <input type="text" name="address">
        </div>
        @error('address')
        <span  style="color: red">{{ $message }}</span>
        @enderror
        <div>
            <button>submit</button>
        </div>
    </form>



    </x-layout>


