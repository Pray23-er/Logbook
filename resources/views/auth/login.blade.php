<x-layout>
    <div class="min-h-screen bg-gradient-to-b from-slate-50 to-slate-100 dark:from-slate-900 dark:to-slate-800 px-4 py-16">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h1 class="text-3xl font-bold text-slate-800 dark:text-white mb-3">Login into your account</h1>
                <p class="text-slate-600 dark:text-slate-400">Select your account type to continue</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                <!-- Student Login Card -->
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg transition-transform duration-300 hover:scale-105 border border-gray-200 dark:border-gray-700">
                    <div class="p-6">
                        <div class="mb-4">
                            <svg class="w-12 h-12 text-blue-600 dark:text-blue-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                            <h5 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">Student Login</h5>
                            <p class="text-gray-600 dark:text-gray-400 mb-6">Access your student portal for course materials and submissions</p>
                        </div>
                        <a href="{{ route('student_login') }}" class="inline-flex w-full items-center justify-center px-4 py-3 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 transition-colors duration-200">
                            Login as Student
                            <svg class="w-4 h-4 ms-2 rtl:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- School Login Card -->
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg transition-transform duration-300 hover:scale-105 border border-gray-200 dark:border-gray-700">
                    <div class="p-6">
                        <div class="mb-4">
                            <svg class="w-12 h-12 text-blue-600 dark:text-blue-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                            <h5 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">School Login</h5>
                            <p class="text-gray-600 dark:text-gray-400 mb-6">Access school administration and management tools</p>
                        </div>
                        <a href="{{ route('school.login') }}" class="inline-flex w-full items-center justify-center px-4 py-3 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 transition-colors duration-200">
                            Login as School
                            <svg class="w-4 h-4 ms-2 rtl:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Company Login Card -->
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg transition-transform duration-300 hover:scale-105 border border-gray-200 dark:border-gray-700">
                    <div class="p-6">
                        <div class="mb-4">
                            <svg class="w-12 h-12 text-blue-600 dark:text-blue-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <h5 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">Company Login</h5>
                            <p class="text-gray-600 dark:text-gray-400 mb-6">Access company portal and business resources</p>
                        </div>
                        <a href="{{ route('company.login') }}" class="inline-flex w-full items-center justify-center px-4 py-3 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 transition-colors duration-200">
                            Login as Company
                            <svg class="w-4 h-4 ms-2 rtl:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
