@extends('/layouts/layout-teacher')
@section('content')

<div class="float-container">
    <div class="mb-0">
    <h2>Activity Name</h2>
    <p>Students Name/Email</p>
</div>
    <div class="float-child">
        <img src="{{ URL('images/placeholder.jpg') }}" alt="This is image">
     </div>
    <div class="float-child">
        <form style="padding: 32px;">
        <div class="row">
            <div class="col">
            <div class="mb-3">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Teacher's Comment"></textarea>
              </div>
        </div>
    </div>
    <div class="input-group mt-5">
    <input type="text" class="form-control" id="code" placeholder="Code">
    <button class="btn btn-primary">
        Redeem Code
    </button>
    </div>
    <div style="margin-top: 45%;">
    <button class="btn btn-primary" style="width: 150px;border-radius: 0;">
        Return
    </button>
</div>
</form>
</div>
</div>

@endsection
