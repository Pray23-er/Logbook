<x-layout>



        <form action="{{ route('student_register.store') }}" method="POST">
            @csrf
            <div class="mb-5">
                <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> First Name</label>
                <input type="text" id="base-input" class="@error('firstname')
                     border-red-500
                 @enderror
                 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="firstname">
                @error('firstname')
                <span class="text-red-500 text=sm"> {{ $message }} </span>
                @enderror
            </div>
            <div class="mb-5">
                <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Last Name</label>
                <input type="text" id="base-input" class="@error('lastname')
                     border-red-500
                 @enderror
                 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="lastname">
                @error('lastname')
                <span class="text-red-500 text=sm"> {{ $message }} </span>
                @enderror
            </div>

           <div class="mb-5">
                <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input type="email" id="base-input" class="@error('email')
                     border-red-500
                 @enderror
                 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="email">
                @error('email')
                <span class="text-red-500 text=sm"> {{ $message }} </span>
                @enderror
            </div>

            <div class="mb-5">
                <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Matric Number</label>
                <input type="text" id="base-input" class="@error('matric_number')
                     border-red-500
                 @enderror
                 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="matric_number">
                @error('matric_number')
                <span class="text-red-500 text=sm"> {{ $message }} </span>
                @enderror
            </div>

            <div class="mb-5">
                <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Year</label>
                <input type="text" id="base-input" class="@error('year')
                     border-red-500
                 @enderror
                 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="year">
                @error('year')
                <span class="text-red-500 text=sm"> {{ $message }} </span>
                @enderror
            </div>


            <div class="mb-5">
                <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Level</label>
                <input type="text" id="base-input" class="@error('level')
                     border-red-500
                 @enderror
                 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="level">
                @error('level')
                <span class="text-red-500 text=sm"> {{ $message }} </span>
                @enderror
            </div>


            <div class="mb-5">
                <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Course of Study</label>
                <input type="text" id="base-input" class="@error('course_of_study')
                     border-red-500
                 @enderror
                 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="course_of_study">
                @error('course_of_study')
                <span class="text-red-500 text=sm"> {{ $message }} </span>
                @enderror
            </div>


            {{-- <div class="mb-5">
                <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">School_id</label>
                <input type="text" id="base-input" class="@error('school_id')
                     border-red-500
                 @enderror
                 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="school_id">
                @error('school_id')
                <span class="text-red-500 text=sm"> {{ $message }} </span>
                @enderror
            </div> --}}


            <div class="mb-5">
                <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
                <input type="text" id="base-input" class="@error('phone_number')
                     border-red-500
                 @enderror
                 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="phone_number">
                @error('phone_number')
                <span class="text-red-500 text=sm"> {{ $message }} </span>
                @enderror
            </div>



            <div class="mb-5">
                <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                <input type="password" id="base-input" class="@error('password')
                     border-red-500
                 @enderror
                 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="password">
                @error('password')
                <span class="text-red-500 text=sm"> {{ $message }} </span>

                @enderror
            </div>
            <div class="mb-5">
                <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password Confirmation</label>
                <input type="password" id="base-input" class="@error('password')
                     border-red-500
                 @enderror
                 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="password_confirmation">
                @error('password_confirmation')
                <span class="text-red-500 text=sm"> {{ $message }} </span>

                @enderror
            </div>

            <div class="mb-5">
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Store</button>

            </div>

        </form>
        <br>
        <a href="{{ route('school.dashboard') }}"> Back to School Page</a>

    </x-layout>

