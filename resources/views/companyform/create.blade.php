<x-head></x-head>

<x-header></x-header>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        /* Custom CSS (if needed) */
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">Company Form</h2>
                        <form action="/companyform" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="companyname" class="form-label">Company Name</label>
                                <input type="text" name="companyname" id="companyname" class="form-control @error('companyname') is-invalid @enderror">
                                @error('companyname')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="Company_phone_number" class="form-label">Company Phone Number</label>
                                <input type="text" name="Company_phone_number" id="Company_phone_number" class="form-control @error('Company_phone_number') is-invalid @enderror">
                                @error('Company_phone_number')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="Company_email" class="form-label">Company Email</label>
                                <input type="text" name="Company_email" id="Company_email" class="form-control @error('Company_email') is-invalid @enderror">
                                @error('Company_email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="matric_number" class="form-label">Matric Number</label>
                                <input type="text" name="matric_number" id="matric_number" class="form-control @error('matric_number') is-invalid @enderror">
                                @error('matric_number')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="Added_by" class="form-label">Added By</label>
                                <input type="text" name="Added_by" id="Added_by" class="form-control @error('Added_by') is-invalid @enderror">
                                @error('Added_by')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<x-footer></x-footer>
