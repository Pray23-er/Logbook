
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My E-logbook Project</title>
    @vite('resources/css/app.css')


</head>
<body class="bg-slate-100 dark:bg-slate-800">

<x-navbar />

    <div class="max-w-6xl mx-auto">
 {{ $slot }}

 <footer class="bg-gray-500 dark:bg-gray-100 text-white container-fluid p-4">
    <div class="max-w-screen-xl mx-auto flex flex-wrap items-center justify-between">
        <div class="w-full md:w-1/2 xl:w-1/3 p-4">
            <h5 class="text-lg font-bold">About Us</h5>
            <p>Siwes Log is a platform designed to help students and companies manage their logbook entries.</p>
        </div>

        <div class="w-full md:w-1/2 xl:w-1/3 p-4">
            <h5 class="text-lg font-bold">Quick Links</h5>
            <ul>
                <li class="mb-2"><a href="{{ route('help') }}" class="text-blue-600 hover:text-blue-800">Help</a></li>
                @guest
                <li class="mb-2"><a href="{{ route('login') }}" class="text-blue-600 hover:text-blue-800">Login</a></li>
                <li class="mb-2"><a href="{{ route('register') }}" class="text-blue-600 hover:text-blue-800">Register</a></li>
                @endguest
            </ul>
        </div>

        <div class="w-full md:w-1/2 xl:w-1/3 p-4">
            <h5 class="text-lg font-bold">Contact Us</h5>
            <p>If you have any questions or need help, please don't hesitate to contact us.</p>
            <ul>
                <li class="mb-2"><a href="mailto:info@siweslog.com" class="text-blue-600 hover:text-blue-800">amoosamuel7777@gmail.com</a></li>
                <li class="mb-2"><a href="tel:+2348064963606" class="text-blue-600 hover:text-blue-800">+234 8064 9636 06</a></li>
            </ul>
        </div>
    </div>

    <div class="bg-gray-600 dark:bg-gray-800 text-white p-4 text-center mt-4">
        <p>&copy; {{ date('Y') }} Siwes Log. All rights reserved.</p>
    </div>
</footer>


</body>
</html>

