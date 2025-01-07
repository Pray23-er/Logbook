<x-layout>
    <div class="min-h-screen bg-gradient-to-b from-slate-50 to-slate-100 dark:from-slate-900 dark:to-slate-800 py-16">
        <div class="max-w-md mx-auto px-4 sm:px-6">
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-slate-800 dark:text-white">Student Registration</h1>
                <p class="mt-2 text-slate-600 dark:text-slate-400">Please fill in your details to register.</p>
            </div>

            <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-lg p-8 border border-slate-200 dark:border-slate-700">
                <form method="POST" action="{{ route('student_register.store') }}" class="space-y-6" enctype="multipart/form-data">
                    @csrf

                    <div class="space-y-2">
                        <label for="firstname" class="block text-sm font-medium text-slate-700 dark:text-slate-200">
                            First Name
                        </label>
                        <input
                            type="text"
                            id="firstname"
                            name="firstname"
                            class="w-full px-4 py-2 rounded-lg border border-slate-300 dark:border-slate-600
                                   focus:ring-2 focus:ring-blue-500 focus:border-transparent
                                   dark:bg-slate-700 dark:text-white placeholder-slate-400
                                   @error('firstname') border-red-500 @enderror"
                            placeholder="Enter your first name"
                        >
                        @error('firstname')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="space-y-2">
                        <label for="lastname" class="block text-sm font-medium text-slate-700 dark:text-slate-200">
                            Last Name
                        </label>
                        <input
                            type="text"
                            id="lastname"
                            name="lastname"
                            class="w-full px-4 py-2 rounded-lg border border-slate-300 dark:border-slate-600
                                   focus:ring-2 focus:ring-blue-500 focus:border-transparent
                                   dark:bg-slate-700 dark:text-white placeholder-slate-400
                                   @error('lastname') border-red-500 @enderror"
                            placeholder="Enter your last name"
                        >
                        @error('lastname')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="space-y-2">
                        <label for="email" class="block text-sm font-medium text-slate-700 dark:text-slate-200">
                            Email
                        </label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            class="w-full px-4 py-2 rounded-lg border border-slate-300 dark:border-slate-600
                                   focus:ring-2 focus:ring-blue-500 focus:border-transparent
                                   dark:bg-slate-700 dark:text-white placeholder-slate-400
                                   @error('email') border-red-500 @enderror"
                            placeholder="Enter your email"
                        >
                        @error('email')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="space-y-2">
                        <label for="matric_number" class="block text-sm font-medium text-slate-700 dark:text-slate-200">
                            Matric Number
                        </label>
                        <input
                            type="text"
                            id="matric_number"
                            name="matric_number"
                            class="w-full px-4 py-2 rounded-lg border border-slate-300 dark:border-slate-600
                                   focus:ring-2 focus:ring-blue-500 focus:border-transparent
                                   dark:bg-slate-700 dark:text-white placeholder-slate-400
                                   @error('matric_number') border-red-500 @enderror"
                            placeholder="Enter your matric number"
                        >
                        @error('matric_number')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="space-y-2">
                        <label for="year" class="block text-sm font-medium text-slate-700 dark:text-slate-200">
                            Year
                        </label>
                        <input
                            type="text"
                            id="year"
                            name="year"
                            class="w-full px-4 py-2 rounded-lg border border-slate-300 dark:border-slate-600
                                                                 focus:ring-2 focus:ring-blue-500 focus:border-transparent
                               dark:bg-slate-700 dark:text-white placeholder-slate-400
                               @error('year') border-red-500 @enderror"
                        placeholder="Enter your year"
                    >
                    @error('year')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-2">
                    <label for="level" class="block text-sm font-medium text-slate-700 dark:text-slate-200">
                        Level
                    </label>
                    <input
                        type="text"
                        id="level"
                        name="level"
                        class="w-full px-4 py-2 rounded-lg border border-slate-300 dark:border-slate-600
                               focus:ring-2 focus:ring-blue-500 focus:border-transparent
                               dark:bg-slate-700 dark:text-white placeholder-slate-400
                               @error('level') border-red-500 @enderror"
                        placeholder="Enter your level"
                    >
                    @error('level')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-2">
                    <label for="course_of_study" class="block text-sm font-medium text-slate-700 dark:text-slate-200">
                        Course of Study
                    </label>
                    <input
                        type="text"
                        id="course_of_study"
                        name="course_of_study"
                        class="w-full px-4 py-2 rounded-lg border border-slate-300 dark:border-slate-600
                               focus:ring-2 focus:ring-blue-500 focus:border-transparent
                               dark:bg-slate-700 dark:text-white placeholder-slate-400
                               @error('course_of_study') border-red-500 @enderror"
                        placeholder="Enter your course of study"
                    >
                    @error('course_of_study')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-2">
                    <label for="phone_number" class="block text-sm font-medium text-slate-700 dark:text-slate-200">
                        Phone Number
                    </label>
                    <input
                        type="text"
                        id="phone_number"
                        name="phone_number"
                        class="w-full px-4 py-2 rounded-lg border border-slate-300 dark:border-slate-600
                               focus:ring-2 focus:ring-blue-500 focus:border-transparent
                               dark:bg-slate-700 dark:text-white placeholder-slate-400
                               @error('phone_number') border-red-500 @enderror"
                        placeholder="Enter your phone number"
                    >
                    @error('phone_number')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-2">
                    <label for="password" class="block text-sm font-medium text-slate-700 dark:text-slate-200">
                        Password
                    </label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        class="w-full px-4 py-2 rounded-lg border border-slate-300 dark:border-slate-600
                               focus:ring-2 focus:ring-blue-500 focus:border-transparent
                               dark:bg-slate-700 dark:text-white placeholder-slate-400
                               @error('password') border-red-500 @enderror"
                        placeholder="Enter your password"
                    >
                    @error('password')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-2">
                    <label for="password_confirmation" class="block text-sm font-medium text-slate-700 dark:text-slate-200">
                        Password Confirmation
                    </label>
                    <input
                        type="password"
                        id="password_confirmation"
                        name="password_confirmation"
                        class="w-full px-4 py-2 rounded-lg border border-slate-300 dark:border-slate-600
                               focus:ring-2 focus:ring-blue-500 focus:border-transparent
                               dark:bg-slate-700 dark:text-white placeholder-slate-400
                               @error('password_confirmation') border-red-500 @enderror"
                        placeholder="Confirm your password"
                    >
                    @error('password_confirmation')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="space-y-2">
                    <label for="image" class="block text-sm font-medium text-slate-700 dark:text-slate-200">
                        Profile Picture
                    </label>
                    <input
                        type="file"
                        id="image"
                        name="image"
                        class="w-full px-4 py-2 rounded-lg border border-slate-300 dark:border-slate-600
                               focus:ring-2 focus:ring-blue-500 focus:border-transparent
                               dark:bg-slate-700 dark:text-white placeholder-slate-400
                               @error('image') border-red-500 @enderror"
                    >
                    @error('image')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <button
                type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2.5 px-4 rounded-lg
                       transform transition-all duration-150 ease-in-out
                       focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2
                       active:scale-95 dark:focus:ring-offset-slate-800"
            >
                Register
            </button>
        </form>
    </div>
</div>
</div>
<br>
<div class="text-center">
    <a href="{{ route('school.dashboard') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2.5 px-4 rounded-lg dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 active:scale-95 dark:focus:ring-offset-slate-800">Back to School Page</a>
    </div>

</x-layout>
