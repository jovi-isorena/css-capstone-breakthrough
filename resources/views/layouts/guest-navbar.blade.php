
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ URL::asset('css/style.css'); }} ">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>Landing</title>
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar">

    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white">
        <div class="container">
          <a href="" class="navbar-brand"><img src="{{ URL::asset('images/INBLogo.png'); }} " height="50px"></a>
          <a class="navbar-brand logo-text" href="#">Ina ng Buhay Catholic School</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#event">Event</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#calendar">Calendar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      @yield('content')


    <footer>
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div>
                <h3>Ina ng buhay catholic school</h3>
                <p class="mb-30 footer-desc">Jordan Heights Subd., Damong 
                  Maliit, Novaliches Quezon City</p>
              </div>
            </div>
            <div class="col-md-4 "></div>
            <div class="col-md-5 ">
              <p class="text-white">Get news from Ina ng Buhay Catholic School in your inbox</p>
              <div class="table-wrap">
                  <div class="wrap">
                    <input type="text" class="p-2" Placeholder="Enter Your Email">
                    </div>
                    <button class="btn">Subscribe</button>
              </div>
          </div>
          <div class="d-flex justify-content-center">
            <div class="copyright">
              <p>Developed and maintained by <a href="#" target="_blank" class="text-white">Breakthrough</a></p>
            </div>
          </div>
        </div>
      </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>