<div class="modal fade" id="createTeacherAccount" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabelTeacher" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabelTeacher">Create New Teacher Account</h1>
          <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('accountStore')}}" method="POST">
            @csrf
            <div class="modal-body">
                <input type="hidden" name="role" value="teacher">
                    {{-- teacher form --}}
                    <div id="teacherform">
                        <div class="mt-3 mb-3">
                            <div class="row">
                                <div class="col-4">
                                    <label for="fname" class="form-label">First Name</label>
                                    <span class="text-danger fst-italics">*
                                        @error('fname')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                    <input type="text" class="form-control" id="fname" name="fname" >
                                </div>
                                <div class="col-3">
                                    <label for="mname" class="form-label">Middle Name</label>
                                    <span class="text-danger fst-italics">
                                        @error('mname')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                    <input type="text" class="form-control" id="mname" name="mname">
                                </div>
                                <div class="col-4">
                                    <label for="lname" class="form-label">Last Name</label>
                                    <span class="text-danger fst-italics">*
                                        @error('lname')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                    <input type="text" class="form-control" id="lname" name="lname">
                                </div>
                                <div class="col-1">
                                    <label for="suffix" class="form-label">Suffix</label>
                                    <span class="text-danger fst-italics">
                                        @error('suffix')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                    <input type="text" class="form-control" id="suffix" name="suffix">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <span class="text-danger fst-italics">*
                                    @error('email')
                                            {{ $message }}
                                        @enderror
                                </span>
                                <input type="text" class="form-control" id="email" name="email">
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="position" class="form-label">Position</label>
                                        <span class="text-danger fst-italics">*
                                            @error('position')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                        <select name="position" id="position" class="form-select">
                                            <option value="" hidden disabled selected>--Select One--</option>
                                            <option value="Teacher 1">Teacher 1</option>
                                            <option value="Teacher 2">Teacher 2</option>
                                            <option value="Teacher 3">Teacher 3</option>
                                            <option value="Master Teacher 1">Master Teacher 1</option>
                                            <option value="Master Teacher 2">Master Teacher 2</option>
                                            <option value="Master Teacher 3">Master Teacher 3</option>
                                            <option value="Master Teacher 4">Master Teacher 4</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="employmentStatus" class="form-label">Employment Status</label>
                                        <span class="text-danger fst-italics">*
                                            @error('employmentStatus')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                        <select name="employmentStatus" id="employmentStatus" class="form-select">
                                            <option value="" hidden disabled selected>--Select One--</option>
                                            <option value="Regular">Regular</option>
                                            <option value="Part-time">Part-time</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end teacher form --}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary bg-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success bg-success">Create</button>
            </div>
        </form>
      </div>
    </div>
</div>

@section('scripts')
    <script>
        function changetab(event){
            let tabID = event.target.options[event.target.selectedIndex].dataset.target;
            const tab = document.querySelector(tabID);
            tab.style.display = "block";
            tab.classList.add('show');
        }
    </script>
@endsection