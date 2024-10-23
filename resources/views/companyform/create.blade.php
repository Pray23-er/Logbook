


<x-layout>
    Fill company form
    <form action="/companyform"  method="POST">
    @csrf
        <div>
            <b><label>Company Name</label></b> <br>
            <input type="text" name="companyname">
        </div>
        @error('companyname')
        <span  style="color: red">{{ $message }}</span>
        @enderror

        <div>
            <b><label> Company Phone Number</label></b> <br>
            <input type="text" name="Company_phone_number">
        </div>
        @error('Company_phone_number')
        <span  style="color: red">{{ $message }}</span>
        @enderror

        <div>
            <b><label>Company Email</label></b> <br>
            <input type="text" name="Company_email">
        </div>
        @error('Company_email')
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
            <b><label>Added By</label></b> <br>
            <input type="text" name="Added_by">
        </div>
        @error('Added_by')
        <span  style="color: red">{{ $message }}</span>
        @enderror
        <div>
            <button>submit</button>
        </div>
    </form>



    </x-layout>


