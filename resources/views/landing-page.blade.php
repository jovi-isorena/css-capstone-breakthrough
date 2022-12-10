@extends('layouts.guest-navbar')
@section('content')
<!-- home -->
<section id="home">
    <div class="container">
      <div class="d-sm-flex align-items-center justify-content-between">
        <div>
          <h1 class=" display-4">INA NG BUHAY CATHOLIC SCHOOL</h1>
          <p>Jordan Heights Subd., Damong 
            Maliit, Novaliches Quezon City</p>
            <a href="{{ route('login') }}" class="btn">Log in</a>
        </div>
        <img src="{{ URL::asset('images/heroimg.png'); }}" class="img-fluid">
      </div>
    </div>
</section>

<!-- event -->
<section id="event">
  <div class="container">
    <div class="row">
      <div class="col-12 section-intro">
        <h1>ANNOUNCEMENT</h1>
        <div class="hline"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-5 card mb-5">
        <img src="{{ URL::asset('images/announcement.jpg'); }} " class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Announcement title</h5>
          <p class="card-text">Stay tuned. We are launching soon. We are working hard. We are almost ready to launch. Something awesome is coming soon. Be first to know.</p>
        </div>
      </div>
      <div class="col-sm-5 card mb-5">
        <img src="{{ URL::asset('images/announcement.jpg'); }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Announcement title</h5>
          <p class="card-text">Stay tuned. We are launching soon. We are working hard. We are almost ready to launch. Something awesome is coming soon. Be first to know.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<hr>

<!-- calendar -->
<section id="calendar">
  <div class="container">
    <div class="row">
      <div class="col-12 section-intro">
        <h1>Happening this week</h1>
        <div class="hline"></div>
      </div>
    </div>
    <div class="row">
      <div class="card mb-3">
        <img src="{{ URL::asset('images/sample-calendar.jpg'); }}" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Event title</h5>
          <p class="card-text">Stay tuned. We are launching soon. We are working hard. We are almost ready to launch. Something awesome is coming soon. Be first to know..</p>
        </div>
      </div>
    </div>
</section>
@endsection
