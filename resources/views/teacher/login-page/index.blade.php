@extends('/layouts/layout-teacher')
@section('content')
<div class="float-container">
    <div class="float-child">
        <form>
            <div class="mb-2">
              <label for="exampleInputEmail1" class="form-label">Email Address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="height: 50px;width: 300px;" placeholder="Email Address">
            </div>
            <div class="mb-2 mt-5">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" style="width: 300px; height: 50px;" placeholder="Password">
            </div>
            <button class="btn btn-primary btn-lg mt-5" style="width: 150px;border: 1px;">
                Login
            </button>
          </form>


    </div>
    <div class="float-child">

       <img src="{{ URL('images/placeholder.jpg') }}" alt="This is image">
    </div>

</div>
@endsection
