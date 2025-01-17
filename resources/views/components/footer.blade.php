<footer id="footer" class="footer dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">Siweslog</span>
          </a>
          <p>We are a team of innovators dedicated to providing digital solutions for students and organizations.</p>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="{{ url('/Sailor/index') }}">Home</a></li>
            <li><a href="{{ url('/Sailor/help') }}">Help</a></li>
            <li><a href="{{ url('/Sailor/register') }}">Register</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Digital Logbook Software</a></li>
            <li><a href="#">Training and Development Programs</a></li>
            <li><a href="#">Logbook Management Services</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12">
          <h4>About Our Mission</h4>
          <p>Our mission is to provide innovative digital solutions that simplify the learning process and enhance productivity.</p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p> <span>Copyright</span> <strong class="px-1 sitename">Siweslog</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        {{-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> --}}
      </div>
    </div>

  </footer>

  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>
