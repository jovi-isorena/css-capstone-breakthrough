<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        <script src="https://kit.fontawesome.com/9a8a7844ac.js" crossorigin="anonymous"></script>

        <style>
            /* For tabs */
div#exTab1.container {
    padding-bottom: 64px;
}
li a.active {
    background: #E9C46A;
}
.nav-fill > li > a.class-stream {
    color: #fff;
    background-color: #666666;
}
.nav-fill > a > a.adopt-tab.active {
    background-color: #fff;
}
.nav-fill > li > a.class-list {
    color: #fff;
    background-color: #666666;
}
.nav-fill > li> a.class-list.active {
    background-color: #fff;
}
.nav-fill > li > a.class-work{
    color: #fff;
    background-color: #666666;
}
.nav-fill > li > a.class-work.active {
    background-color: #fff;
}

textarea {
    resize: none;
}

label {
    font-family: 'Roboto', sans-serif !important;
    font-size: 18px;
    font-weight: normal;
    letter-spacing: .05em;
}
input {
    border: none;
}
.input-group input {
    height: 40px;
}
.form-group select {
    height: 40px;
}
span.input-group-addon {
    border: none;
}
select {
    border: none;
}


/* for side by side div */
.float-container {
    padding: 20px;
}

.float-child {
    width: 50%;
    float: left;
    padding: 50px;

}

            /* remove button of dropdown */
        .dropdown-toggle::after{
            content: none;
        }
        /* dropdown notification */
.nav-pills .nav-link.active, .nav-pills .show > .nav-link{
background-color: #17A2B8;
}
.dropdown-menu{
top: 60px;
right: 0px;
left: unset;
width: 460px;
box-shadow: 0px 5px 7px -1px #c1c1c1;
padding-bottom: 0px;
padding: 0px;
}
.dropdown-menu:before{
content: "";
position: absolute;
top: -20px;
right: 12px;
border:10px solid #343A40;
border-color: transparent transparent #343A40 transparent;
}
.head{
padding:5px 15px;
border-radius: 3px 3px 0px 0px;
}

.notification-box{
padding: 10px 0px;
}
.bg-gray{
background-color: #eee;
}
@media (max-width: 640px) {
.dropdown-menu{
top: 50px;
left: -16px;
width: 290px;
}
.nav{
display: block;
}
.nav .nav-item,.nav .nav-item a{
padding-left: 0px;
}
.message{
font-size: 13px;
}
}

body{
    font-family: 'Roboto', sans-serif;
}

/* For carousel css */
#MiCarousel{
    margin-top: 30px;
    margin-bottom: 30px;
    -webkit-box-shadow: 10px 10px 38px -13px rgba(0,0,0,0.75);
    -moz-box-shadow: 10px 10px 38px -13px rgba(0,0,0,0.75);
    box-shadow: 10px 10px 38px -13px rgba(0,0,0,0.75);
}
.carousel-img{
    background-color: #000;
    color: #fff;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    width: 100%;
    height: 100%;
    position: absolute;
    z-index: 2;
    -webkit-clip-path: polygon(0 0, 96% 0, 100% 100%, 0% 100%);
    clip-path: polygon(0 0, 90% 0, 100% 100%, 0% 100%);
    opacity: 0.8;
}

.div-r{
    padding: 40px;
}

.carousel-title{
    font-size: 80px;
    font-weight: bold;
    margin-left: 20px;
    margin-top: 20px;
}

.carousel-pagination{
    background-color: #000 !important;
    width: 15px !important;
    height: 15px !important;
    border-radius: 100%;
    position: relative;
    bottom: -50px;
    opacity: 0.5;
}

.carousel-pagination.active{
    opacity: 1;
}

.carousel-controls{
    display: none;
}
        </style>
    </head>
    <body class="d-flex flex-column min-vh-100 font-sans antialiased">
            {{-- To include navigation or navbar--}}
            @include('layouts.teacher-navigation')


            @yield('content')
<br>
@if (Route::has('login'))
@auth
<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>School Name
            </h6>
            <p>
              Here you can use rows and columns to organize your footer content. Lorem ipsum
              dolor sit amet, consectetur adipisicing elit.
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Contact
            </h6>
            <p>
              <a href="#!" class="text-reset">Angular</a>
            </p>
            <p>
              <a href="#!" class="text-reset">React</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Vue</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Laravel</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              About Us
            </h6>
            <p>
              <a href="#!" class="text-reset">Pricing</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Settings</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Orders</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Help</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              info@example.com
            </p>
            <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
            <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

  </footer>
  <!-- Footer -->
  @else
  @endauth
  @endif

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
