@extends('/layouts/layout-teacher')
@section('content')

{{-- Tabke Header --}}
<div class="container-fluid mt-5">
<div class="card">
    <div class="card-header" style="background-color: #fff;">
        <h6 class="text-center mb-0">Section 1 - Year 1</h6>
    </div>

{{-- Table body --}}
    <div class="card-body">
  <div class="table-responsive">
    <table class="table" style="width:100%">
           <thead>
      <tr>
         <th>Studet Num</th>
          <th>Name</th>
          <th>Section</th>
          <th>Subject 1</th>
          <th>Subject 2</th>
          <th>Subject 3</th>
          <th>Subject 4</th>
          <th>Subject 5</th>
          <th>Subject 6</th>
          <th>Subject 7</th>
          <th>Subject 8</th>
          <th>Final Grade</th>
          <th>Release</th>
      </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Student 1</td>
            <td>Sample Section</td>
            <td>80</td>
            <td>80</td>
            <td>80</td></td>
            <td>80</td>
            <td>80</td>
            <td>80</td>
            <td>80</td>
            <td>80</td>
            <td>80</td>
            <td>
            <button class="btn btn-primary mb-2" style="width: 100px;border-radius: 0;">
                Yes
            </button>
            <br>
            <button class="btn btn-danger" style="width: 100px;border-radius: 0;">
                No
            </button> 
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Student 2</td>
            <td>Sample Section</td>
            <td>80</td>
            <td>80</td>
            <td>80</td>
            <td>80</td>
            <td>80</td>
            <td>80</td>
            <td>80</td>
            <td>80</td>
            <td>80</td>
            <td>
                <button class="btn btn-primary mb-2" style="width: 100px;border-radius: 0;">
                    Yes
                </button>
                <br>
                <button class="btn btn-danger" style="width: 100px;border-radius: 0;">
                    No
                </button> 
                </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Student 3</td>
            <td>Sample Section</td>
            <td>80</td>
            <td>80</td>
            <td>80</td>
            <td>80</td>
            <td>80</td>
            <td>80</td>
            <td>80</td>
            <td>80</td>
            <td>80</td>
            <td>
                <button class="btn btn-primary mb-2" style="width: 100px;border-radius: 0;">
                    Yes
                </button>
                <br>
                <button class="btn btn-danger" style="width: 100px;border-radius: 0;">
                    No
                </button> 
                </td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Student 4</td>
            <td>Sample Section</td>
            <td>80</td>
            <td>80</td>
            <td>80</td>
            <td>80</td>
            <td>80</td>
            <td>80</td>
            <td>80</td>
            <td>80</td>
            <td>80</td>
            <td>
                <button class="btn btn-primary mb-2" style="width: 100px;border-radius: 0;">
                    Yes
                </button>
                <br>
                <button class="btn btn-danger" style="width: 100px;border-radius: 0;">
                    No
                </button> 
                </td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>Student 5</td>
            <td>Sample Section</td>
            <td>80</td>
            <td>80</td>
            <td>80</td>
            <td>80</td>
            <td>80</td>
            <td>80</td>
            <td>80</td>
            <td>80</td>
            <td>80</td>
            <td>
                <button class="btn btn-primary mb-2" style="width: 100px;border-radius: 0;">
                    Yes
                </button>
                <br>
                <button class="btn btn-danger" style="width: 100px;border-radius: 0;">
                    No
                </button> 
                </td>
          </tr>
    </tbody>
    </table>
   </div>
  </div>
  </div>
</div>
@endsection