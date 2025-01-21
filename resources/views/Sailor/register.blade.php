<!DOCTYPE html>
<html lang="en">

<x-head>

</x-head>

<body class="contact-page">

    <x-header>

    </x-header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0 text-center">Register</h1>
      </div>
    </div>
    <!-- End Page Title -->


    <!-- Contact Section -->
    <section id="contact" class="contact section">


      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <div class="card shadow-sm">
              <div class="card-body">
                <h2 class="text-center mb-4">Register Your Account</h2>
                <form action="{{ route('register.store') }}" method="POST">
                  @csrf


                  <!-- Name Field -->
                  <div class="form-group mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter your full name">
                    @error('name')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>


                  <!-- Email Field -->
                  <div class="form-group mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter your email">
                    @error('email')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>


                  <!-- Password Field -->
                  <div class="form-group mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Create a strong password">
                    @error('password')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>


                  <!-- Password Confirmation Field -->
                  <div class="form-group mb-3">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Confirm your password">
                  </div>


                  <!-- Account Type Selection -->
                  <div class="form-group mb-3">
                    <label for="type" class="form-label">Account Type</label>
                    <select id="type" name="type" class="form-select @error('type') is-invalid @enderror">
                      <option value="">Select account type</option>
                      <option value="school">School</option>
                      <option value="company">Company</option>
                    </select>
                    @error('type')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>


                  <!-- Submit Button -->
                  <div class="form-group mb-3">
                    <button type="submit" class="btn btn-primary w-100">Create Account</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>


    </section><!-- /Contact Section -->


  </main>






  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <x-footer>

  </x-footer>

</body>

</html>
