<div class="modal fade" id="createAccount" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Create new account</h1>
          <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('accountStore')}}" method="POST">
            @csrf
            <div class="modal-body">
                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <select name="role" id="role" class="form-select">
                        <option value="sysadmin">System Admin</option>
                        <option value="schladmin">School Admin</option>
                        <option value="teacher">Teacher</option>
                        <option value="student">Student</option>
                    </select>
                </div>
                <hr>
                {{-- system admin form --}}
                <div id="systemadmin">
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
                    </div>
                </div>
                {{-- end system admin form --}}
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success bg-success">Create</button>
            </div>
        </form>
      </div>
    </div>
  </div>