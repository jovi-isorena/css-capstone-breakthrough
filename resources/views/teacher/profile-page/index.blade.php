@extends('layouts.layout-teacher')
@section('content')
<div class="" style="height: 300px;background-color: #d3d3d3">
<div class="jumbotron  jumbotron-fluid d-flex justify-content-center position-relative">
    <div class="card" style="width:700px;margin-top: 100px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{ URL('images/placeholder.jpg') }}" style="width: 250px; height: 350px;" alt="This is image">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Juan Dela Cruz</h5>
              <div class="row">
                <div class="col-4">
                  AGE:
                </div>
                <div class="col-4">
                  20
                </div>
              </div>
              <div class="row">
                  <div class="col-4">
                    ADDRESS:
                  </div>
                  <div class="col-4">
                    Sample Address Of Student
                  </div>
                </div>
                <div class="row">
                  <div class="col-4">
                    EMAIL:
                  </div>
                  <div class="col-4">
                    SampleEmail@gmail.com
                  </div>
                </div>
                <div class="row">
                  <div class="col-4">
                    PHONE:
                  </div>
                  <div class="col-4">
                    0912345678
                  </div>
                </div>
            </div>
          </div>
        </div>
        <div class="card-footer bg-secondary text-end"><button type="button" class="btn btn-danger">Logout</button></div>
      </div>
</div>
</div>
<br/>
<div class="float-container" style="margin-top: 15%;">
    <div class="float-child">

        <img class="rounded-circle mx-auto d-block" src="{{ URL('images/placeholder.jpg') }}" alt="This is image" style="width: 150px;height: 150px;border-radius: 100px;">
        <h4 style="text-align: center;" class="mt-2">Section 1</h5>
        <h5 style="text-align: center;" class="mt-2">Subject</h5>
    </div>
    <div class="float-child">

        <img class="rounded-circle mx-auto d-block" src="{{ URL('images/placeholder.jpg') }}" alt="This is image" style="width: 150px;height: 150px;border-radius: 100px;">
        <h4 style="text-align: center;" class="mt-2">Section 2</h5>
        <h5 style="text-align: center;" class="mt-2">Subject</h5>
    </div>
    <div class="float-child">

        <img class="rounded-circle mx-auto d-block" src="{{ URL('images/placeholder.jpg') }}" alt="This is image" style="width: 150px;height: 150px;border-radius: 100px;">
        <h4 style="text-align: center;" class="mt-2">Section 3</h5>
        <h5 style="text-align: center;" class="mt-2">Subject</h5>
    </div>
    <div class="float-child">

        <img class="rounded-circle mx-auto d-block" src="{{ URL('images/placeholder.jpg') }}" alt="This is image" style="width: 150px;height: 150px;border-radius: 100px;">
        <h4 style="text-align: center;" class="mt-2">Section 4</h5>
        <h5 style="text-align: center;" class="mt-2">Subject</h5>
    </div>
    <div class="float-child">

        <img class="rounded-circle mx-auto d-block" src="{{ URL('images/placeholder.jpg') }}" alt="This is image" style="width: 150px;height: 150px;border-radius: 100px;">
        <h4 style="text-align: center;" class="mt-2">Section 5</h5>
        <h5 style="text-align: center;" class="mt-2">Subject</h5>
    </div>
    <div class="float-child">

        <img class="rounded-circle mx-auto d-block" src="{{ URL('images/placeholder.jpg') }}" alt="This is image" style="width: 150px;height: 150px;border-radius: 100px;">
        <h4 style="text-align: center;" class="mt-2">Section 6</h5>
        <h5 style="text-align: center;" class="mt-2">Subject</h5>
    </div>
</div>

@include('layouts.teacher-footer')
@endsection
