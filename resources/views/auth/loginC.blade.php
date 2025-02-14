<x-head>

</x-head>



    <x-header>

    </x-header>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Company Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <style>
            .company-image {
                max-width: 100%; /* Image will fill its container */
                height: auto;     /* Maintain aspect ratio */
            }
        </style>
    </head>
    <body class="min-vh-100 bg-gradient-to-b from-slate-50 to-slate-100 dark:from-slate-900 dark:to-slate-800">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">  <img src="{{ asset('images/newcomp.jpeg') }}" alt="Company Login Image" class="img-fluid rounded-2 company-image">
                </div>
                <div class="col-md-6 bg-white dark:bg-slate-800 rounded-2 shadow p-4 border border-slate-200 dark:border-slate-700">
                    <div class="text-center mb-4">
                        <h1 class="h3 fw-bold text-slate-800 dark:text-white">Company Login</h1>
                        <p class="mt-2 text-slate-600 dark:text-slate-400">Welcome back! Please enter your details.</p>
                    </div>

                    <form method="POST" action="{{ route('company.login.store') }}" class="space-y-3">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label text-sm font-medium text-slate-700 dark:text-slate-200">
                                Email
                            </label>
                            <input type="email" id="email" name="email"
                                class="form-control rounded-lg border border-slate-300 dark:border-slate-600
                                        focus:ring-2 focus:ring-blue-500 focus:border-transparent
                                        dark:bg-slate-700 dark:text-white placeholder-slate-400
                                        @error('email') is-invalid @enderror"
                                placeholder="Enter your email">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label text-sm font-medium text-slate-700 dark:text-slate-200">
                                Password
                            </label>
                            <input type="password" id="password" name="password"
                                class="form-control rounded-lg border border-slate-300 dark:border-slate-600
                                        focus:ring-2 focus:ring-blue-500 focus:border-transparent
                                        dark:bg-slate-700 dark:text-white placeholder-slate-400
                                        @error('password') is-invalid @enderror"
                                placeholder="Enter your password">
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>


                        <button type="submit" class="w-100 btn btn-primary">
                            Sign in
                        </button>
                    </form>
                </div>
            </div>
        </div>

    </body>
    </html>
<x-footer>

</x-footer>
