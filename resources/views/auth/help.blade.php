<x-head>

</x-head>



    <x-header>

    </x-header>
    @vite('resources/css/app.css')
    <div class="min-h-screen bg-gradient-to-b from-slate-50 to-slate-100 dark:from-slate-900 dark:to-slate-800 py-12">
        <div class="container mx-auto px-4 max-w-7xl">
            <header class="mb-12">
                <h1 class="text-4xl font-bold text-slate-800 dark:text-slate-100">Training and Help</h1>
                <p class="mt-3 text-lg text-slate-600 dark:text-slate-400">Find comprehensive guides for students, companies, and schools</p>
            </header>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Student Guides -->
                <div class="bg-white dark:bg-slate-800 rounded-xl shadow-sm border border-slate-200 dark:border-slate-700 transition duration-300 hover:shadow-md">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <svg class="w-6 h-6 text-blue-600 dark:text-blue-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                            <h2 class="text-2xl font-bold text-slate-800 dark:text-slate-100">Students</h2>
                        </div>

                        <div class="space-y-6">
                            <section>
                                <h3 class="text-lg font-semibold text-slate-700 dark:text-slate-200 mb-3">Getting Started with Logbook</h3>
                                <div class="space-y-3 text-slate-600 dark:text-slate-300">
                                    <p class="text-sm">To get started with Logbook, follow these steps:</p>
                                    <ol class="list-decimal list-inside space-y-2 text-sm pl-4">
                                        <li>Register for an account on the Logbook website</li>
                                        <li>Verify your email address and set up your password</li>
                                        <li>Log in to your account and complete your profile</li>
                                        <li>Start creating logbook entries to track your progress</li>
                                    </ol>
                                </div>
                            </section>

                            <section>
                                <h3 class="text-lg font-semibold text-slate-700 dark:text-slate-200 mb-3">Recording Logbook Entries</h3>
                                <div class="space-y-3 text-slate-600 dark:text-slate-300">
                                    <p class="text-sm">To record logbook entries, follow these steps:</p>
                                    <ol class="list-decimal list-inside space-y-2 text-sm pl-4">
                                        <li>Navigate to the logbook page</li>
                                        <li>Click the "New Entry" button</li>
                                        <li>Enter entry details including date, time, and activities</li>
                                        <li>Attach relevant files or images</li>
                                        <li>Save and submit for approval</li>
                                    </ol>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>

                <!-- Company Guides -->
                <div class="bg-white dark:bg-slate-800 rounded-xl shadow-sm border border-slate-200 dark:border-slate-700 transition duration-300 hover:shadow-md">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <svg class="w-6 h-6 text-blue-600 dark:text-blue-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                            <h2 class="text-2xl font-bold text-slate-800 dark:text-slate-100">Companies</h2>
                        </div>

                        <div class="space-y-6">
                            <section>
                                <h3 class="text-lg font-semibold text-slate-700 dark:text-slate-200 mb-3">Managing Student Accounts</h3>
                                <div class="space-y-3 text-slate-600 dark:text-slate-300">
                                    <p class="text-sm">Create and manage student accounts for your interns:</p>
                                    <ol class="list-decimal list-inside space-y-2 text-sm pl-4">
                                        <li>Access the administrator dashboard</li>
                                        <li>Click "Create New Account"</li>
                                        <li>Enter student details</li>
                                        <li>Provide login credentials</li>
                                    </ol>
                                </div>
                            </section>

                            <section>
                                <h3 class="text-lg font-semibold text-slate-700 dark:text-slate-200 mb-3">Managing Logbook Entries</h3>
                                <div class="space-y-3 text-slate-600 dark:text-slate-300">
                                    <p class="text-sm">Review and manage student logbook entries:</p>
                                    <ol class="list-decimal list-inside space-y-2 text-sm pl-4">
                                        <li>Access the logbook page</li>
                                        <li>Review entry details</li>
                                        <li>Approve or reject entries</li>
                                        <li>Provide feedback when needed</li>
                                    </ol>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>

                <!-- School Guides -->
                <div class="bg-white dark:bg-slate-800 rounded-xl shadow-sm border border-slate-200 dark:border-slate-700 transition duration-300 hover:shadow-md">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <svg class="w-6 h-6 text-blue-600 dark:text-blue-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path>
                            </svg>
                            <h2 class="text-2xl font-bold text-slate-800 dark:text-slate-100">Schools</h2>
                        </div>

                        <div class="space-y-6">
                            <section>
                                <h3 class="text-lg font-semibold text-slate-700 dark:text-slate-200 mb-3">System Integration</h3>
                                <div class="space-y-3 text-slate-600 dark:text-slate-300">
                                    <p class="text-sm">Integrate Logbook with your existing systems:</p>
                                    <ol class="list-decimal list-inside space-y-2 text-sm pl-4">
                                        <li>Access integration settings</li>
                                        <li>Select target system</li>
                                        <li>Configure integration options</li>
                                        <li>Test and verify connection</li>
                                    </ol>
                                </div>
                            </section>

                            <section>
                                <h3 class="text-lg font-semibold text-slate-700 dark:text-slate-200 mb-3">Account Management</h3>
                                <div class="space-y-3 text-slate-600 dark:text-slate-300">
                                    <p class="text-sm">Manage all user accounts effectively:</p>
                                    <ol class="list-decimal list-inside space-y-2 text-sm pl-4">
                                        <li>Access account management</li>
                                        <li>Review account details</li>
                                        <li>Modify roles and permissions</li>
                                        <li>Update account settings</li>
                                    </ol>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-footer>

    </x-footer>
