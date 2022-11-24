<header>
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="btn btn-secondary" href="#">your logo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class=" d-flex">
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-dark" aria-current="page" href="#">Classes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">Calendar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">Posted Task</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">About Us</a>
          </li>
          @if (Route::has('login'))
                    @auth
                    {{-- Notification dropdown --}}
                    <li class="dropdown">
                        <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="far fa-bell"></i>
                          </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li class="head text-light bg-dark">
                                <div class="row">
                                <div class="col-lg-12 col-sm-12 col-12">
                                <span>Notifications (3)</span>
                                <a href="" class="float-right text-light">Mark all as read</a>
                                </div>
                                </li>
                                <li class="notification-box">
                                <div class="row">
                                <div class="col-lg-3 col-sm-3 col-3 text-center">
                                <img src="{{ URL('images/profile.png') }}" class="w-50 rounded-circle">
                                </div>
                                <div class="col-lg-8 col-sm-8 col-8">
                                <strong class="text-info">John Doe</strong>
                                <div>
                                Lorem ipsum dolor sit amet, consectetur
                                </div>
                                <small class="text-warning">27.11.2015, 15:00</small>
                                </div>
                                </div>
                                </li>
                                <li class="notification-box bg-gray">
                                <div class="row">
                                <div class="col-lg-3 col-sm-3 col-3 text-center">
                                <img src="{{ URL('images/profile.png') }}" class="w-50 rounded-circle">
                                </div>
                                <div class="col-lg-8 col-sm-8 col-8">
                                <strong class="text-info">David John</strong>
                                <div>
                                Lorem ipsum dolor sit amet, consectetur
                                </div>
                                <small class="text-warning">27.11.2015, 15:00</small>
                                </div>
                                </div>
                                </li>
                                <li class="notification-box">
                                <div class="row">
                                <div class="col-lg-3 col-sm-3 col-3 text-center">
                                <img src="{{ URL('images/profile.png') }}" class="w-50 rounded-circle">
                                </div>
                                <div class="col-lg-8 col-sm-8 col-8">
                                <strong class="text-info">David John</strong>
                                <div>
                                Lorem ipsum dolor sit amet, consectetur
                                </div>
                                <small class="text-warning">27.11.2015, 15:00</small>
                                </div>
                                </div>
                                </li>
                                <li class="footer bg-dark text-center">
                                <a href="" class="text-light">View All</a>
                                </li>
                                </ul>
                      </li>

                      {{-- Profile dropdown --}}
          <li class="dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <i class="far fa-user-circle"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li><a class="dropdown-item" href="#">Tuition Status</a></li>
              <li><a class="dropdown-item" href="#">Logout</a></li>
            </ul>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
            @endif

        </li>
        </ul>

    </div>
</div>
      </div>
  </nav>

</header>
