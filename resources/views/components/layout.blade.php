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
        {{ $slot }}  </div>

        <footer class="bg-gray-800 dark:bg-gray-900 text-gray-300 py-8 px-4 sm:px-6 lg:px-8 mt-8">
            <div class="max-w-7xl mx-auto flex flex-col md:flex-row md:justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <p class="text-sm">&copy; {{ date('Y') }} Siwes Log. All rights reserved.</p>
                </div>
                <div class="flex space-x-6">
                    <a href="#" class="text-sm hover:text-gray-100 transition duration-300">About Us</a>
                    <a href="#" class="text-sm hover:text-gray-100 transition duration-300">Contact</a>
                    <a href="#" class="text-sm hover:text-gray-100 transition duration-300">Terms & Conditions</a>
                </div>
            </div>
        </footer>

        <script>
            function dropdown() {
                return {
                    mobileMenuOpen: false,
                }
            }
        </script>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</body>
</html>
