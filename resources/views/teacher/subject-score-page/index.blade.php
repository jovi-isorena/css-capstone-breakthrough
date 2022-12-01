@extends('/layouts/layout-teacher')
@section('content')

{{-- Tabke Header --}}
<div class="container-fluid mt-5">
    <div class="text-start mt-3 mb-5">
        <h2>Teacher's Name</h2>
    </div>
<div class="card border border-0">
{{-- Table body --}}
    <div class="card-body">
  <div class="table-responsive">
    <table class="table table-bordered border-3 rounded-0" style="width:100%">
           <thead>
      <tr>
        <th class="text-center">Student</th>
        <th class="text-center">Quizes</th>
        <th class="text-center">Assignment</th>
        <th class="text-center">Exams</th>
      </tr>
    </thead>
    <tbody>
        <tr>
            <th class="rounded-0 m-0 w-25 text-center"><img src="{{ URL('images/profile.png') }}" class="img-fluid rounded-3" alt="Proifle" style="width: 100px;"><p>Student Name</p></th>
            <th class="text-center align-middle text-secondary">80</th>
            <th class="text-center align-middle text-secondary">80</th>
            <th class="text-center align-middle text-secondary">80</th>
        </tr>
        <tr>
            <th class="rounded-0 m-0 w-25 text-center"><img src="{{ URL('images/profile.png') }}" class="img-fluid rounded-3" alt="Proifle" style="width: 100px;"><p>Student Name</p></th>
            <th class="text-center align-middle text-secondary">80</th>
            <th class="text-center align-middle text-secondary">80</th>
            <th class="text-center align-middle text-secondary">80</th>
        </tr>
        <tr>
            <th class="rounded-0 m-0 w-25 text-center"><img src="{{ URL('images/profile.png') }}" class="img-fluid rounded-3" alt="Proifle" style="width: 100px;"><p>Student Name</p></th>
            <th class="text-center align-middle text-secondary">80</th>
            <th class="text-center align-middle text-secondary">80</th>
            <th class="text-center align-middle text-secondary">80</th>
        </tr>
        <tr>
            <th class="rounded-0 m-0 w-25 text-center"><img src="{{ URL('images/profile.png') }}" class="img-fluid rounded-3" alt="Proifle" style="width: 100px;"><p>Student Name</p></th>
            <th class="text-center align-middle text-secondary">80</th>
            <th class="text-center align-middle text-secondary">80</th>
            <th class="text-center align-middle text-secondary">80</th>
        </tr>
        <tr>
            <th class="rounded-0 m-0 w-25 text-center"><img src="{{ URL('images/profile.png') }}" class="img-fluid rounded-3" alt="Proifle" style="width: 100px;"><p>Student Name</p></th>
            <th class="text-center align-middle text-secondary">80</th>
            <th class="text-center align-middle text-secondary">80</th>
            <th class="text-center align-middle text-secondary">80</th>
        </tr>
    </tbody>
    </table>
   </div>
  </div>
  </div>
</div>
@endsection
