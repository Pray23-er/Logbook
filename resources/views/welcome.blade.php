<x-layout>

    <div style="display:grid ;
        grid-template-columns: 1fr 1fr 1fr;
        margin-top: 30px;
        column-gap: 20px;
        row-gap:20px;

        ">

            <!-- SIWES Section -->
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ">
                <div class="p-5">
                   <a href="#">
                       <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">SIWES</h5>
                   </a>
                   <img src="{{ asset('images/logbook1.jpeg') }}" alt="SIWES Image" class="w-full h-48 object-cover mb-3">
                   <a href="/" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    SIWES (Students Industrial Work Experience Scheme) is a program designed for students to gain practical experience in their field of study.
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                       </svg>
                   </a>
                </div>
               </div>

            <!-- Logbook Section -->
               <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ">
                <div class="p-5">
                   <a href="#">
                       <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">LOGBOOK</h5>
                   </a>
                   <img src="{{ asset('images/logbook4.jpeg') }}" alt="Logbook Image" class="w-full h-48 object-cover mb-3">
                   <a href="/" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Keeping a logbook helps you track your progress, identify areas for improvement, and showcase your skills to potential employers.
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                       </svg>
                   </a>
               </div>
               </div>

            <!-- Importance of Logbook Section -->
                   <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ">
                    <div class="p-5">
                       <a href="#">
                           <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Importance of Logbook</h5>
                       </a>
                       <img src="{{ asset('images/logbook2.jpeg') }}" alt="Logbook Importance Image" class="w-full h-48 object-cover mb-3">
                       <a href="/" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Keeping a logbook helps you track your progress, identify areas for improvement, and showcase your skills to potential employers.
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                    </div>

             <!-- Picture Section 1 -->
             <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ">
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">SIWES Help</h5>
                    </a>
                 <img src="{{ asset('images/logbook5.jpeg') }}" alt="SIWES Logbook Image" class="w-full h-48 object-cover mb-3">
                 <a href="{{ route('help') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Get help with your SIWES logbook and learn how to use our system effectively.
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                       </svg>
                   </a>
               </div>
             </div>

             <!-- Picture Section 2 -->
             <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-200 dark:border-gray-700 ">
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Sign In/Up</h5>
                    </a>
                 <img src="{{ asset('images/logbook6.jpeg') }}" alt="SIWES Logbook Image" class="w-full h-48 object-cover mb-3">
                 <a href="{{ route('register') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Click to sign in/up and start using our SIWES logbook system.
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                       </svg>
                   </a>
               </div>
             </div>

             <!-- Register Section -->
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ">
                     <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Register</h5>
                        </a>
                        <img src="{{ asset('images/logbook3.jpeg') }}" alt="Register Image" class="w-full h-48 object-cover mb-3">
                        <a href="{{ route('register') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                         Click the register button to create an account and start using our logbook system.
                             <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                    </div>


         </div>
         </x-layout>
