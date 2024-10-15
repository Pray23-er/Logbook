<x-layout>
    <div class="mt-4">
        <h1 class="p-2 text-slate-700 dark:text-slate-200">Login into your account</h1>

    </div>


<div style="display:grid ;
    grid-template-columns: 1fr 1fr 1fr;
    margin-top: 30px;
    column-gap: 20px;
    row-gap:20px;

    ">
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ">
        <div class="p-5">
           <a href="#">
               <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Student Login</h5>
           </a>
           <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"></p>
           <a href="{{ route('student_login') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
               login
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
               </svg>
           </a>
       </div>
       </div>
       <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
       <div class="p-5">
           <a href="#">
               <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">School Login</h5>
           </a>
           <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"></p>
           <a href="{{ route('school.login') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
               login
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
               </svg>
           </a>
       </div>
       </div>

       <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

       <div class="p-5">
           <a href="#">
               <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Company Login</h5>
           </a>
           <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"></p>
           <a href="{{ route('company.login') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
               login
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
               </svg>
           </a>
       </div>
       </div>
</div>

</x-layout>
