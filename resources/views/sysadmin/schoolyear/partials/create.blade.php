<div class="modal fade" id="createSchoolYear" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabelSysad" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabelSysad">Create New System Admin Account</h1>
          <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('schoolYearStore')}}" method="POST">
            @csrf
            <div class="modal-body">
                <div class="mb-3">
                    <label for="start" class="form-label">Start</label>
                    <span class="text-danger fst-italics">*
                        @error('start')
                            {{ $message }}
                        @enderror
                    </span>
                    <input type="month" class="form-control" id="start" name="start" >
                </div>
                <div class="mb-3">
                    <label for="end" class="form-label">Start</label>
                    <span class="text-danger fst-italics">*
                        @error('end')
                            {{ $message }}
                        @enderror
                    </span>
                    <input type="month" class="form-control" id="end" name="end" >
                </div>
                
                
                    
                    
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary bg-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success bg-success">Create</button>
            </div>
        </form>
      </div>
    </div>
</div>
