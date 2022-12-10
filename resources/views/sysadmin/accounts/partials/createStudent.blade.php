<div class="modal fade" id="createStudentAccount" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabelStudent" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabelStudent">Create New Student Account</h1>
          <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('accountStore')}}" method="POST" enctype='multipart/form-data'>
            @csrf
            <div class="modal-body">
                <input type="hidden" name="role" value="student">
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
                                        <label for="gradeLevel" class="form-label">Grade Level</label>
                                        <span class="text-danger fst-italics">*
                                            @error('gradeLevel')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                        <select name="gradeLevel" id="gradeLevel" class="form-select">
                                            <option value="" hidden disabled selected>--Select One--</option>
                                            @for ($i = 1; $i < 13; $i++)
                                                <option value="{{$i}}">{{$i}}</option>
                                                
                                            @endfor
                                            
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="gender" class="form-label">Gender</label>
                                        <span class="text-danger fst-italics">*
                                            @error('gender')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                        <select name="gender" id="gender" class="form-select">
                                            <option value="" hidden disabled selected>--Select One--</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                        <div class="col-md-11"><label for="image" class="form-label">--Select Photo--</label>
                                            <input type="file" class="" name="imageURL" id="imageURL"> 
                                            @error('image')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                            @enderror
</div>
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