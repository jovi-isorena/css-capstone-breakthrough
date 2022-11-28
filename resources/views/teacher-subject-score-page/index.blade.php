@extends('/layouts/layout-teacher')
@section('content')

{{-- Tabke Header --}}
<div class="container-fluid mt-5">
    <div class="text-start mt-3 mb-5 ms-5">
        <h2>Section 1 - Year 1</h2>
    </div>
<div class="card border border-0">
{{-- Table body --}}
    <div class="card-body">
  <div class="table-responsive">
    <table class="table border border-3 rounded-0" style="width:100%">
           <thead>
      <tr>
         <th>Student</th>
          <th>Quizes</th>
          <th>Assignment</th>
          <th>Exams</th>
      </tr>
    </thead>
    <tbody>
        <tr>
            <th class="border-end rounded-0 m-0 w-25"><img src="{{ URL('images/profile.png') }}" class="img-fluid rounded-3" alt="Proifle" style="width: 100px;"></th>
            <th class="text-center align-middle text-secondary">Student 1</th>
        </tr>
        <tr>
            <th class="border-end rounded-0 m-0 w-25"><img src="{{ URL('images/profile.png') }}" class="img-fluid rounded-3" alt="Proifle" style="width: 100px;"></th>
            <th class="text-center align-middle text-secondary">Student 2</th>
        </tr>
        <tr>
            <th class="border-end rounded-0 m-0 w-25"><img src="{{ URL('images/profile.png') }}" class="img-fluid rounded-3" alt="Proifle" style="width: 100px;"></th>
            <th class="text-center align-middle text-secondary">Student 3</th>
        </tr>
        <tr>
            <th class="border-end rounded-0 m-0 w-25"><img src="{{ URL('images/profile.png') }}" class="img-fluid rounded-3" alt="Proifle" style="width: 100px;"></th>
            <th class="text-center align-middle text-secondary">Student 4</th>
        </tr>
        <tr>
            <th class="border-end rounded-0 m-0 w-25"><img src="{{ URL('images/profile.png') }}" class="img-fluid rounded-3" alt="Proifle" style="width: 100px;"></th>
            <th class="text-center align-middle text-secondary">Student 5</th>
        </tr>
    </tbody>
    </table>
   </div>
  </div>
  </div>
</div>
@endsection
