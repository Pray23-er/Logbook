<x-head></x-head>

<x-header></x-header>



<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="text-3xl font-bold mb-4 text-center">Add a Student to Your Company</h2>

            <div class="card bg-white dark:bg-gray-800 rounded-lg shadow-md p-4">
                <div class="card-body">
                    <form action="/forms" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="firstname" class="form-label">First Name</label>
                            <input type="text" name="firstname" id="firstname"
                                class="form-control @error('firstname') is-invalid @enderror"
                                placeholder="Enter first name">
                            @error('firstname')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="lastname" class="form-label">Last Name</label>
                            <input type="text" name="lastname" id="lastname"
                                class="form-control @error('lastname') is-invalid @enderror"
                                placeholder="Enter last name">
                            @error('lastname')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="matric_number" class="form-label">Matric Number</label>
                            <input type="text" name="matric_number" id="matric_number"
                                class="form-control @error('matric_number') is-invalid @enderror"
                                placeholder="Enter matric number">
                            @error('matric_number')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="school_name" class="form-label">School Name</label>
                            <input type="text" name="school_name" id="school_name"
                                class="form-control @error('school_name') is-invalid @enderror"
                                placeholder="Enter school name">
                            @error('school_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="phone_number" class="form-label">Phone Number</label>
                            <input type="text" name="phone_number" id="phone_number"
                                class="form-control @error('phone_number') is-invalid @enderror"
                                placeholder="Enter phone number">
                            @error('phone_number')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" name="address" id="address"
                                class="form-control @error('address') is-invalid @enderror"
                                placeholder="Enter address">
                            @error('address')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="d-grid gap-2 mt-2">
                <a href="{{ route('company.dashboard') }}" class="btn btn-secondary">Back to Dashboard</a>
            </div>
        </div>
    </div>
</div>

<x-footer></x-footer>
