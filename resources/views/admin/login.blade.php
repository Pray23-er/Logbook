<x-head>

</x-head>

<x-header>

</x-header>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body">
                                    <h2 class="text-center mb-4">Admin Login</h2>
                                    <form method="POST" action="{{ route('admin.login') }}">
                                        @csrf

                                        <div class="form-group">
                                            <label for="email" class="sr-only">Email</label>
                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        </div>

                                        <div class="form-group">
                                            <label for="password" class="sr-only">Password</label>
                                            <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password">
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-block">
                                            Login
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<x-footer>
</x-footer>

