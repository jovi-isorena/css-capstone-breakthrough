@extends('/layouts/layout-teacher')
@section('content')
<div class="float-container">
        <div class="float-child">
            <h1>Ina ng Buhay Catholic School</h1>

            <h5 class="mt-5">School announcement or simple sub-header taking two or more lines
            </h5>

            <button class="btn btn-primary btn-lg mt-5" style="width: 150px;border: 1px;">
                Login
            </button>
        </div>
        <div class="float-child">

           <img src="{{ URL('images/placeholder.jpg') }}" alt="This is image">
        </div>

    </div>

    {{-- For announcement --}}
      <div class="jumbotron jumbotron-fluid" style="margin-top: -30px;">
          <p class="text-dark" style="text-align:center;font-size:30px;">
          <strong>Announcements</strong>
            </p>
            <br>

            <img class="rounded mx-auto d-block" src="{{ URL('images/placeholder.jpg') }}" alt="This is image" width="450px" height="300px">
<br>
<p class="text-dark" style="text-align:center;font-size:20px;">
    <strong>Announcement description</strong>
      </p>
      </div>

      {{-- Carousel for announcement --}}
      <div class="row">
        <div class="col-md-12">
            <div id="MiCarousel" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#MiCarousel" data-bs-slide-to="0" class="carousel-pagination active"></li>
                    <li data-bs-target="#MiCarousel" data-bs-slide-to="1" class="carousel-pagination"></li>
                    <li data-bs-target="#MiCarousel" data-bs-slide-to="2" class="carousel-pagination"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="float-container">
                            <div class="float-child">

                                <img class="rounded-circle mx-auto d-block" src="{{ URL('images/placeholder.jpg') }}" alt="This is image" style="width: 250px;height: 250px;border-radius: 100px;">
                                <h4 style="text-align: center;" class="mt-2">Announcement 1</h5>
                                <h5 style="text-align: center;" class="mt-2">Announcement description</h5>
                            </div>
                            <div class="float-child">
                                <img class="rounded-circle mx-auto d-block" src="{{ URL('images/placeholder.jpg') }}" alt="This is image" style="width: 250px;height: 250px;border-radius: 100px;">
                                <h4 style="text-align: center;" class="mt-2">Announcement 2</h5>
                                <h5 style="text-align: center;" class="mt-2">Announcement description</h5>
                            </div>
                        </div>

                    </div>
                    <div class="carousel-item">
                        <div class="float-container">
                            <div class="float-child">

                                <img class="rounded-circle mx-auto d-block" src="{{ URL('images/placeholder.jpg') }}" alt="This is image" style="width: 250px;height: 250px;border-radius: 100px;">
                                <h4 style="text-align: center;" class="mt-2">Announcement 3</h5>
                                <h5 style="text-align: center;" class="mt-2">Announcement description</h5>
                            </div>
                            <div class="float-child">
                                <img class="rounded-circle mx-auto d-block" src="{{ URL('images/placeholder.jpg') }}" alt="This is image" style="width: 250px;height: 250px;border-radius: 100px;">
                                <h4 style="text-align: center;" class="mt-2">Announcement 4</h5>
                                <h5 style="text-align: center;" class="mt-2">Announcement description</h5>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="float-container">
                            <div class="float-child">

                                <img class="rounded-circle mx-auto d-block" src="{{ URL('images/placeholder.jpg') }}" alt="This is image" style="width: 250px;height: 250px;border-radius: 100px;">
                                <h4 style="text-align: center;" class="mt-2">Announcement 5</h5>
                                <h5 style="text-align: center;" class="mt-2">Announcement description</h5>
                            </div>
                            <div class="float-child">
                                <img class="rounded-circle mx-auto d-block" src="{{ URL('images/placeholder.jpg') }}" alt="This is image" style="width: 250px;height: 250px;border-radius: 100px;">
                                <h4 style="text-align: center;" class="mt-2">Announcement 6</h5>
                                <h5 style="text-align: center;" class="mt-2">Announcement description</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev carousel-controls" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next carousel-controls" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    {{-- School calendar --}}
    <div class="jumbotron jumbotron-fluid">
        <div class="float-child">
            <img src="{{ URL('images/placeholder.jpg') }}" alt="This is image">
         </div>
        <div class="float-child">
            <p style="font-size: 50px;"><strong>School Calendar</strong></p>

            <h5 class="mt-5">Description of Event in School Calendar
            </h5>
        </div>
    </div>
    <br>

@endsection
