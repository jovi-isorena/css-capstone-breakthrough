@extends('/layouts/layout-teacher')
@section('content')
<div class="container-fluid">
    <h2 class="text-start">Create Task</h2>
    <div class="d-flex justify-content-center">
    <div class="row"><form>
        <div class="mb-3">
          <input type="text" class="form-control rounded-1" style="width: 800px;" value="Task Type(Assignment, Seatwork, Quiz)">
        </div>
        <div class="mb-3">
          <input type="text" value="Sample Question" class="form-control mt-3">
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Sample Choices of answer</label>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Sample Choices of answer</label>
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Sample Choices of answer</label>
          </div>
          <div class="mb-5">
            <input type="text" value="Sample Answer key Input" class="form-control mt-3">
          </div>

          <div class="mb-3">
            <input type="text" value="Sample Question" class="form-control mt-3">
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Sample Choices of answer</label>
          </div>
          <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Sample Choices of answer</label>
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Sample Choices of answer</label>
            </div>
            <div class="mb-5">
                <input type="text" value="Sample Answer keY Input" class="form-control mt-3">
              </div>

              <div class="mb-5 text-center">
                <button type="button" class="btn btn-primary rounded-0 btn-md">Continue</button>
                <button type="button" class="btn btn-danger rounded-0 btn-md ms-3">Cancel</button>
            </div>
      </form>
</div>
</div>
</div>

@endsection
