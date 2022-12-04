@extends('/layouts/layout-teacher')
@section('content')

{{-- Tabke Header --}}
<div class="container-fluid mt-5 d-flex justify-content-center">
<div class="card border border-0 text-center" style="width: 1000px;">
{{-- Table body --}}
    <div class="card-body">
  <div class="table-responsive">
    <table class="table table-bordered rounded-0" style="width:100%">
           <thead>
      <tr>
         <th class="w-15">Student</th>
          <th class="w-85">Student Name</th>
      </tr>
    </thead>
    <tbody>
        <tr>
            <th class="rounded-0 m-0 w-25"><img src="{{ URL('images/profile.png') }}" class="img-fluid rounded-3" alt="Proifle" style="width: 100px;"></th>
            <th class="align-middle text-dark">JUAN DELA CRUZ</th>
        </tr>
        <tr>
            <th class="rounded-0 m-0 w-25"><img src="{{ URL('images/profile.png') }}" class="img-fluid rounded-3" alt="Proifle" style="width: 100px;"></th>
            <th class="align-middle text-dark">Student Name</th>
        </tr>
        <tr>
            <th class="rounded-0 m-0 w-25"><img src="{{ URL('images/profile.png') }}" class="img-fluid rounded-3" alt="Proifle" style="width: 100px;"></th>
            <th class="align-middle text-dark">Student Name</th>
        </tr>
        <tr>
            <th class="rounded-0 m-0 w-25"><img src="{{ URL('images/profile.png') }}" class="img-fluid rounded-3" alt="Proifle" style="width: 100px;"></th>
            <th class="align-middle text-dark">Student Name</th>
        </tr>
        <tr>
            <th class="rounded-0 m-0 w-25"><img src="{{ URL('images/profile.png') }}" class="img-fluid rounded-3" alt="Proifle" style="width: 100px;"></th>
            <th class="align-middle text-dark">Student Name</th>
        </tr>
    </tbody>
    </table>
   </div>
  </div>
  </div>
</div>
@endsection
