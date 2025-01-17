<!DOCTYPE html>
<html lang="en">

<x-head>

</x-head>

<body class="index-page">

<x-header>

</x-header>





  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item active">
            <img src="{{ asset('assets/img/hero-carousel/logbook4.jpeg') }}" alt="">
          <div class="carousel-container">
            <h2>Welcome to Siweslog<br></h2>
            <p>Siweslog is a digital tool that helps students, schools, and companies manage student internships better. It replaces paper logbooks with an easy-to-use online system, making it easier for everyone to track progress and learn.</p>
            <a href="{{ url('/Sailor/register') }}" class="btn-get-started">Get Started</a>
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
            <img src="{{ asset('assets/img/hero-carousel/logbook2.jpeg') }}" alt="">
          <div class="carousel-container">
            <h2>Log your Experience</h2>
            <p>Siweslog helps students record their work experience easily, get feedback from supervisors, and learn more effectively. Schools can also use it to monitor students' progress and make informed decisions. It saves time and reduces paperwork..</p>
            <a href="{{ url('/Sailor/register') }}" class="btn-get-started">Get Started</a>
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
            <img src="{{ asset('assets/img/hero-carousel/logbook3.jpeg') }}" alt="">
          <div class="carousel-container">
            <h2>Streamlining Siwes Logbook</h2>
            <p>With Siweslog, companies can easily verify students' work, provide guidance, and build strong partnerships with schools. It makes internships more efficient, effective, and beneficial for everyone involved</p>
            <a href="{{ url('/Sailor/register') }}" class="btn-get-started">Get Started</a>
          </div>
        </div><!-- End Carousel Item -->

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators"></ol>

      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p>
              Our E-Logbook system is designed to facilitate a seamless Students' Industrial Work Experience Scheme (SIWES) journey. By digitizing the logbook process, we aim to enhance the overall experience for students, supervisors, and institutions.
            </p>
            <ul>
              <li><i class="bi bi-check2-circle"></i> <span>Easy logbook submission and tracking</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>Real-time feedback and assessment tools</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>Comprehensive reporting and analytics</span></li>
            </ul>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <p>
              With our E-Logbook system, students can easily record their work experience, while supervisors can efficiently monitor progress and provide feedback. Institutions can also access detailed reports to evaluate the effectiveness of their SIWES programs.
            </p>
            <a href="{{ url('/Sailor/register') }}" class="read-more"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->



    <!-- Services Section -->

   <section id="services" class="services section">
    <div class="container">

      <div class="row gy-4">

        <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item d-flex position-relative h-100">
            <i class="bi bi-briefcase icon flex-shrink-0"></i>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">E-Logbook Management</a></h4>
              <p class="description">Effortlessly manage student logbooks, track progress, and receive real-time feedback with our intuitive E-Logbook system.</p>
            </div>
          </div>
        </div><!-- End Service Item -->

        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="service-item d-flex position-relative h-100">
            <i class="bi bi-card-checklist icon flex-shrink-0"></i>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Supervisor Monitoring</a></h4>
              <p class="description">Supervisors can easily monitor student progress, provide feedback, and assess student performance using our comprehensive monitoring tools.</p>
            </div>
          </div>
        </div><!-- End Service Item -->

        <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="service-item d-flex position-relative h-100">
            <i class="bi bi-bar-chart icon flex-shrink-0"></i>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Performance Analytics</a></h4>
              <p class="description">Gain valuable insights into student performance, identify areas of improvement, and make data-driven decisions with our advanced analytics tools.</p>
            </div>
          </div>
        </div><!-- End Service Item -->

        <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="service-item d-flex position-relative h-100">
            <i class="bi bi-binoculars icon flex-shrink-0"></i>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Student Engagement</a></h4>
              <p class="description">Foster a collaborative learning environment, encourage student engagement, and promote meaningful interactions between students, supervisors, and institutions.</p>
            </div>
          </div>
        </div><!-- End Service Item -->

        <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
          <div class="service-item d-flex position-relative h-100">
            <i class="bi bi-brightness-high icon flex-shrink-0"></i>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Customizable Reporting</a></h4>
              <p class="description">Generate customized reports to meet the specific needs of your institution, supervisors, or students, and easily export data for further analysis.</p>
            </div>
          </div>
        </div><!-- End Service Item -->

        <div class="col-md-6" data-aos="fade-up" data-aos-delay="600">
          <div class="service-item d-flex position-relative h-100">
            <i class="bi bi-calendar4-week icon flex-shrink-0"></i>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Streamlined Logbook Submission</a></h4>
              <p class="description">Simplify the logbook submission process for students, reducing paperwork and administrative burdens, and enabling timely feedback and assessment.</p>
            </div>
          </div>
        </div><!-- End Service Item -->

      </div>

    </div>

  </section>
    <!-- /Services Section -->
  </main>



  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <x-footer>

  </x-footer>


