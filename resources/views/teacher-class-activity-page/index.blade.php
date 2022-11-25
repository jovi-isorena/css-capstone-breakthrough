@extends('/layouts/layout-teacher')
@section('content')

<div class="float-container">
    <h2>Activity Name</h2>
    <p>Students Name/Email</p>
    <div class="float-child">

        <img src="{{ URL('images/placeholder.jpg') }}" alt="This is image">
     </div>
    <div class="float-child">
        <h1>Ina ng Buhay Catholic School</h1>

        <h5 class="mt-5">School announcement or simple sub-header taking two or more lines
        </h5>

        <button class="btn btn-primary btn-lg mt-5" style="width: 150px;border: 1px;">
            Login
        </button>
    </div>
</div>


@endsection
